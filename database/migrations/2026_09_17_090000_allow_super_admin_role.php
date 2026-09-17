<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (DB::getDriverName() !== 'sqlite') {
            Schema::table('users', function (Blueprint $table) {
                $table->string('role')->default('wartawan')->change();
            });

            return;
        }

        DB::statement('PRAGMA foreign_keys = OFF');
        DB::statement('ALTER TABLE users RENAME TO users_old');
        DB::statement("CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR NOT NULL, email VARCHAR NOT NULL UNIQUE, email_verified_at DATETIME, password VARCHAR NOT NULL, remember_token VARCHAR, created_at DATETIME, updated_at DATETIME, role VARCHAR CHECK (role IN ('admin', 'editor', 'wartawan', 'user', 'super_admin')) NOT NULL DEFAULT 'wartawan')");
        DB::statement('INSERT INTO users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, role) SELECT id, name, email, email_verified_at, password, remember_token, created_at, updated_at, role FROM users_old');
        DB::statement('DROP TABLE users_old');
        DB::statement('PRAGMA foreign_keys = ON');
    }

    public function down(): void
    {
        // Jangan menghapus dukungan super_admin saat rollback karena data user dapat menggunakannya.
    }
};

// ponytail: SQLite CHECK constraints require rebuilding the table; use a native ALTER on other drivers.
