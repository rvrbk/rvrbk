<?php

namespace App\Controllers\Api;

use App\Models\Page;

class PageController
{
    static public function getById(int $id): void
    {
        dd($id);
    }
}