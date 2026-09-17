<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'super_admin'], true);
    }

    public function view(User $user, User $record): bool
    {
        return $this->viewAny($user) && ($user->role === 'super_admin' || $record->role !== 'super_admin');
    }

    public function create(User $user): bool
    {
        return $this->viewAny($user);
    }

    public function update(User $user, User $record): bool
    {
        return $user->role === 'super_admin' || ($user->role === 'admin' && in_array($record->role, ['editor', 'wartawan', 'user'], true));
    }

    public function delete(User $user, User $record): bool
    {
        return $user->role === 'super_admin' && $record->getKey() !== $user->getKey();
    }
}

// ponytail: Admin CRUD is limited to operational accounts; add explicit role validation at the form trust boundary next.
