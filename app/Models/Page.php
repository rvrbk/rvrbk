<?php

namespace App\Models;

use App\vendor\Rvrbk\LittlePhpFramework\Core\Model;

class Page extends Model 
{
    public static function getBySlug(string $slug) 
    {
        return (object)self::database()->get('pages', '*', [
            'slug' => $slug
        ]);
    }
}