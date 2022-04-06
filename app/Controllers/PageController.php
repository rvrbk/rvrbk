<?php

namespace App\Controllers;

use App\Models\Page;

class PageController extends Controller
{
    static public function index(string $slug): void
    {
        $page = Page::getBySlug($slug);
        
        self::render('page/index', [
            'title' => $page->title,
            'content' => $page->content
        ]);
    }    
}