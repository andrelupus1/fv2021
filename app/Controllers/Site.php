<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Site extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI();
        $uri = service('uri');
        $param = $uri->getQuery(); //Param
        if ($uri->getSegment(1) == 'site') {
            $id_name = $uri->getSegment(2);
            echo "$id_name - $param";
        }
    }
}
