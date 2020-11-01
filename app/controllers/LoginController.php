<?php

namespace App\controllers;

use App\core\Controller;
use App\core\Request;

class LoginController extends Controller
{
    public function index()
    {
        $this->setLayout('auth');
        return $this->render('auth/login');
    }

    public function store(Request $request)
    {
    }
}
