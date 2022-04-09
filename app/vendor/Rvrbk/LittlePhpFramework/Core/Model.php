<?php

namespace App\vendor\Rvrbk\LittlePhpFramework\Core;

use App\vendor\Rvrbk\LittlePhpFramework\Biblio\Biblio;

class Model extends Biblio
{
    private $database;

    function __construct()
    {
        if (!isset($this->database)) {
            $biblio = new Biblio();

            $this->database = $biblio->getDatabase();
        }
    }

    protected static function database()
    {
        $model = new Model();

        return $model->database;
    }
}