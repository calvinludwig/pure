<?php

namespace App\controllers;

use App\core\Application;
use App\core\Request;

class ContactController
{
    public function index()
    {
        return Application::$app->router->renderView('contact');
    }

    public function store(Request $request)
    {
        $body = $request->getBody();

        var_dump($body);
        die;
    }
}
