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
        $data = [
            'page_title' => 'Login',
            'page_path' => base_url('assets'),
            'page_copyright' => 'Festa Virtual'
    ];
        echo view('template\site\header_template', $data);
        echo view('Auth\login');
        echo view('template\site\footer_template');
    }
    public function register()
    {
        $data = [
            'page_title' => 'Registrar-se',
            'page_path' => base_url('assets'),
            'page_copyright' => 'Festa Virtual'
    ];
        echo view('template\site\header_template', $data);
        echo view('Auth\register');
        echo view('template\site\footer_template');
    }
    public function logout()
    {
        echo "logout...";
    }
}
