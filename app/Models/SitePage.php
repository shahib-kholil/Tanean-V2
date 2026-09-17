<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Support\SanitizesRichText;

class SitePage extends Model
{
    protected $fillable = ['slug', 'title', 'content'];

    protected static function booted(): void
    {
        static::saving(function (self $page): void {
            $page->content = SanitizesRichText::clean($page->content);
        });
    }
}
