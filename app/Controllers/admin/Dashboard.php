<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    // List all your items
    public function index()
    {
        $data = [
            'page_title' => 'Nome do Site Aqui',
            'page_path' => base_url('assets'),
            'page_copyright' => 'Festa Virtual'
    ];

        echo view('template\admin\header_template', $data);
        echo view('admin\dashboard\index_dashboard');
        echo view('template\admin\footer_template');
    }
   
    // Add a new item
    public function add()
    {
    }
   
    //Update one item
    public function update($id = null)
    {
    }
   
    //Delete one item
    public function delete($id = null)
    {
    }
}
