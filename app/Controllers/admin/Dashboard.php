<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	   // List all your items
	   public function index()
	   {
		   echo "Bem-vindo ao Dasboard";
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
