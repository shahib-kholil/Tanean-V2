<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul')
                    ->placeholder('Masukkan judul artikel')
                    ->required(),
                TextInput::make('slug')
                    ->label('Slug URL')
                    ->placeholder('Otomatis dari judul jika dikosongkan')
                    ->unique(ignoreRecord: true),
                Textarea::make('excerpt')
                    ->label('Ringkasan')
                    ->placeholder('Tulis ringkasan singkat artikel')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->label('Isi Artikel')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Gambar Artikel')
                    ->image()
                    ->disk('public')
                    ->directory('articles'),
                Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'warta' => 'Warta',
                        'warita' => 'Warita',
                        'swara' => 'Swara',
                        'lensa' => 'Lensa',
                    ])
                    ->required(),
                TextInput::make('author')
                    ->label('Penulis')
                    ->placeholder('Masukkan nama penulis')
                    ->required(),
                Toggle::make('is_published')
                    ->label('Terbitkan Artikel')
                    ->required(),
                DateTimePicker::make('published_at')->label('Waktu Terbit'),

            ]);
    }
}
