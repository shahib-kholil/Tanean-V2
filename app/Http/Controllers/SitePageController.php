<?php

namespace App\Http\Controllers;

use App\Models\SitePage;

class SitePageController extends Controller
{
    public function show(string $slug)
    {
        $page = SitePage::where('slug', $slug)->firstOrFail();
        $page->content = (new \HTMLPurifier(\HTMLPurifier_Config::createDefault()))->purify($page->content ?? '');

        return view('site-page', compact('page'));
    }
}
