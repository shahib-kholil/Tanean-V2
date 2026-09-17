<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'Admin', 'email' => 'admin@berita.com', 'role' => 'admin'],
            ['name' => 'Editor Berita', 'email' => 'editor@berita.com', 'role' => 'editor'],
            ['name' => 'Wartawan 1', 'email' => 'wartawan@berita.com', 'role' => 'wartawan'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                $user + ['password' => Hash::make('password')]
            );
        }
    }
}
