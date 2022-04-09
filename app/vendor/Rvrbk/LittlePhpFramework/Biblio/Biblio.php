<?php

namespace App\vendor\Rvrbk\LittlePhpFramework\Biblio;

use Medoo\Medoo;

class Biblio 
{
    private $database;

    function __construct() 
    {
        $this->database = new Medoo([
            'type' => env('DB_TYPE'),
            'host' => env('DB_HOST'),
            'database' => env('DB_NAME'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD')
        ]);
    }

    public function getDatabase(): Medoo
    {
        return $this->database;
    }
}