<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use RuntimeException;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $password = env('SUPER_ADMIN_PASSWORD');

        if (! is_string($password) || strlen($password) < 12) {
            throw new RuntimeException('SUPER_ADMIN_PASSWORD wajib diisi dan minimal 12 karakter.');
        }

        User::updateOrCreate(
            ['email' => 'superadmin@tanean.id'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make($password),
                'role' => 'super_admin',
                'email_verified_at' => now(),
            ],
        );
    }
}
