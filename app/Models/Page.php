<?php

namespace App\Models;

use App\vendor\Rvrbk\LittlePhpFramework\Core\Model;

class Page extends Model 
{
    public static function getBySlug(string $slug): object 
    {
        return (object)self::database()->get('pages', '*', [
            'slug' => $slug
        ]);
    }

    public static function getById(int $id): object
    {
        return (object)self::database()->get('pages', '*', [
            'id' => $id
        ]);
    }
}