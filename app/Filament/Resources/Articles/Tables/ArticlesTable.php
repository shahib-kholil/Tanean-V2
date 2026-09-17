<?php

namespace App\Filament\Resources\Articles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ArticlesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable()->toggleable(),
                TextColumn::make('url')->label('URL')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('user_id')->label('ID Pengguna')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('title')->label('Judul')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('slug')->label('Slug URL')
                    ->searchable()
                    ->toggleable(),
                ImageColumn::make('image')->label('Gambar')->toggleable(),
                TextColumn::make('category')->label('Kategori')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('author')->label('Penulis')
                    ->searchable()
                    ->toggleable(),
                IconColumn::make('is_published')->label('Status Terbit')
                    ->boolean()
                    ->toggleable(),
                TextColumn::make('published_at')->label('Waktu Terbit')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('created_at')->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')->label('Diperbarui Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('approved_by')->label('Disetujui Oleh')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('approved_at')->label('Disetujui Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
            ])
            ->reorderableColumns()
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
