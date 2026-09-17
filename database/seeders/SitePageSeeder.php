<?php

namespace Database\Seeders;

use App\Models\SitePage;
use Illuminate\Database\Seeder;

class SitePageSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            'tentang-kami' => 'Tentang Kami',
            'redaksi' => 'Redaksi',
            'pedoman-media-siber' => 'Pedoman Media Siber',
            'kontak' => 'Kontak',
        ] as $slug => $title) {
            SitePage::firstOrCreate(['slug' => $slug], [
                'title' => $title,
                'content' => '<p>Tulis konten halaman ini melalui panel admin.</p>',
            ]);
        }
    }
}
