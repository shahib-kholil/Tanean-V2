<?php

namespace App\Filament\Resources\SitePages\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class SitePageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('slug')->label('Halaman')->options([
                'tentang-kami' => 'Tentang Kami',
                'redaksi' => 'Redaksi',
                'pedoman-media-siber' => 'Pedoman Media Siber',
                'kontak' => 'Kontak',
            ])->required()->unique(ignoreRecord: true),
            TextInput::make('title')->label('Judul Halaman')->placeholder('Masukkan judul halaman')->required(),
            RichEditor::make('content')->label('Isi Halaman')->required()->columnSpanFull(),
        ]);
    }
}
