<?php

namespace App\Filament\Resources\SitePages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SitePagesTable
{
    public static function configure(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('id')->label('ID')->sortable()->toggleable(),
            TextColumn::make('title')->label('Judul')->searchable()->sortable()->toggleable(),
            TextColumn::make('slug')->label('Slug URL')->searchable()->toggleable(),
            TextColumn::make('updated_at')->label('Diperbarui Pada')->dateTime()->sortable()->toggleable(),
        ])->reorderableColumns()->recordActions([
            EditAction::make(),
        ])->toolbarActions([
            BulkActionGroup::make([DeleteBulkAction::make()]),
        ]);
    }
}
