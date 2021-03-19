<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index($offset = 0)
    {
		$uri = new \CodeIgniter\HTTP\URI();
        $uri = service('uri');
        $param = $uri->getQuery(); //Param
        $id_name = $uri->getSegment(2);
        echo "Index user - $id_name - $param";
    }

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
