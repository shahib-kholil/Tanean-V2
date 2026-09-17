<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama')
                    ->placeholder('Masukkan nama lengkap')
                    ->required(),
                TextInput::make('email')
                    ->label('Alamat Email')
                    ->placeholder('nama@contoh.com')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at')->label('Email Terverifikasi Pada'),
                TextInput::make('password')
                    ->label('Kata Sandi')
                    ->placeholder('Masukkan kata sandi')
                    ->password()
                    ->revealable()
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $operation): bool => $operation === 'create'),
                Select::make('role')
                    ->label('Peran')
                    ->disabled(fn ($record) => $record?->role === 'super_admin' && auth()->user()?->role !== 'super_admin')
                    ->options(fn () => auth()->user()?->role === 'super_admin'
                        ? [
                            'admin' => 'Admin',
                            'editor' => 'Editor',
                            'wartawan' => 'Wartawan',
                            'user' => 'User',
                            'super_admin' => 'Super Admin',
                        ]
                        : [
                            'editor' => 'Editor',
                            'wartawan' => 'Wartawan',
                        ])
                    ->required()
                    ->default('wartawan'),
            ]);
    }
}
