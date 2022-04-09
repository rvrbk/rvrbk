<?php

namespace App\Controllers;

use App\Models\Page;

class PageController extends Controller
{
    static public function index(): void
    {
        self::page('home');
    }
    
    static public function page(string $slug): void
    {
        $page = Page::getBySlug($slug);
        
        self::render('page/index', [
            'title' => $page->title,
            'content' => $page->content
        ]);
    }

    static public function getById(int $id): void
    {
        dd($id);
    }
}