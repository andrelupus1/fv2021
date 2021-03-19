<?php

namespace App\Controllers;

use App\Controllers\BaseController;

/**
 * Auth class
 * Login, register ...
 */
class Auth extends BaseController
{
    public function index()
    {
        echo  "Index";
    }
    public function login()
    {
        return view('Auth/login');
    }
    public function register()
    {
        echo "Register!";
    }
    public function logout()
    {
        echo "logout...";
    }
}
