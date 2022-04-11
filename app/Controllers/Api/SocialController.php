<?php

namespace App\Controllers\Api;

use Nette\Http\Request;
use Nette\Http\RequestFactory;
use Nette\Http\Url;
use Nette\Http\UrlScript;

class SocialController
{
    static public function contact(): void
    {
        dd($_POST);
        $request = new Request(new UrlScript());

        dd($request->getPost());
    }
}