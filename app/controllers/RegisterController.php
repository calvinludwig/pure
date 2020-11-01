<?php

namespace App\controllers;

use App\core\Controller;
use App\core\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $this->setLayout('auth');
        return $this->render('auth/register');
    }

    public function store(Request $request)
    {
    }
}
