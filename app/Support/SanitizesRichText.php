<?php

namespace App\Support;

use HTMLPurifier;
use HTMLPurifier_Config;

final class SanitizesRichText
{
    public static function clean(?string $html): ?string
    {
        if ($html === null) {
            return null;
        }

        $config = HTMLPurifier_Config::createDefault();
        $config->set('HTML.Allowed', 'p,br,strong,b,em,i,u,h1,h2,h3,h4,ul,ol,li,blockquote,a[href|title|target],img[src|alt|width|height],table,thead,tbody,tr,th,td');
        $config->set('URI.AllowedSchemes', ['http' => true, 'https' => true, 'mailto' => true]);

        return (new HTMLPurifier($config))->purify($html);
    }
}

// ponytail: whitelist only editor formatting; expand it only when a reviewed editor feature needs another tag or attribute.
