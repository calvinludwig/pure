<?php

namespace App\controllers;

use App\core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->render('home', [
            'name' => 'Pure Framework MVC'
        ]);
    }
}
