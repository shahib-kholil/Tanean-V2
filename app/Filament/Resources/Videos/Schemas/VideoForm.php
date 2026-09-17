<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul')
                    ->placeholder('Masukkan judul video')
                    ->required(),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->placeholder('Tulis deskripsi video')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('author')
                    ->label('Penulis')
                    ->placeholder('Masukkan nama penulis')
                    ->required(),
                TextInput::make('thumbnail_url')
                    ->label('URL Thumbnail')
                    ->placeholder('https://contoh.com/thumbnail.jpg')
                    ->url()
                    ->required(),
                TextInput::make('video_url')
                    ->label('URL Video')
                    ->placeholder('https://youtube.com/watch?v=...')
                    ->url()
                    ->required(),
                Toggle::make('featured')
                    ->label('Video Utama')
                    ->required(),
            ]);
    }
}
