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
            'site_name' => 'Festa Virtual',
            'page_title' => 'Login',
            'page_path' => base_url('assets'),
            'page_copyright' => 'Festa Virtual'
    ];
        echo view('template\auth\header_template', $data);
        echo view('Auth\login');
        echo view('template\auth\footer_template');
    }
    public function register()
    {
        $data = [
            'site_name' => 'Festa Virtual',
            'page_title' => 'Registrar-se',
            'page_path' => base_url('assets'),
            'page_copyright' => 'Festa Virtual'
    ];
        echo view('template\auth\header_template', $data);
        echo view('Auth\register');
        echo view('template\auth\footer_template');
    }
    public function forgotpassword()
    {
        $data = [
            'site_name' => 'Festa Virtual',
            'page_title' => 'Esqueceu a Senha?',
            'page_path' => base_url('assets'),
            'page_copyright' => 'Festa Virtual'
    ];
        echo view('template\auth\header_template', $data);
        echo view('Auth\forgotpassword');
        echo view('template\auth\footer_template');
    }
    public function password()
    {
        $data = [
            'site_name' => 'Festa Virtual',
            'page_title' => 'Recuperar Senha',
            'page_path' => base_url('assets'),
            'page_copyright' => 'Festa Virtual'
    ];
        echo view('template\auth\header_template', $data);
        echo view('Auth\password');
        echo view('template\auth\footer_template');
    }
    public function verifyemail()
    {
        $response = "Ops!";
        $data = [
            'response' => $response,
            'site_name' => 'Festa Virtual',
            'page_title' => 'Ativação - Verifica E-mail',
            'page_path' => base_url('assets'),
            'page_copyright' => 'Festa Virtual'
    ];
        echo view('template\auth\header_template', $data);
        echo view('Auth\activeemail');
        echo view('template\auth\footer_template');
    }
    public function logout()
    {
        echo "logout...";
    }
}
