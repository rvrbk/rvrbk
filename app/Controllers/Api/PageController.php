<?php

namespace App\Controllers\Api;

use App\Models\Page;

class PageController
{
    static public function get(int $id): object
    {
        if ($page = Page::getById($id)) {
            return $page;
        }

        throw new Exception('Page not found');
    }
}