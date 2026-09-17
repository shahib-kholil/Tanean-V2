<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\User;
use App\Models\Video;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ContentStats extends BaseWidget
{
    protected ?string $heading = 'Ringkasan Konten';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Artikel', Article::count())
                ->description('Semua artikel di sistem')
                ->icon('heroicon-o-document-text'),
            Stat::make('Artikel Terbit', Article::where('is_published', true)->count())
                ->description('Tampil di halaman publik')
                ->icon('heroicon-o-check-circle'),
            Stat::make('Total Video', Video::count())
                ->description('Konten video tersimpan')
                ->icon('heroicon-o-video-camera'),
            Stat::make('Pengguna', User::count())
                ->description('Akun terdaftar')
                ->icon('heroicon-o-users'),
        ];
    }
}
