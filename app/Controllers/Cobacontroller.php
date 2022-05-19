<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Cobacontroller extends Controller{

 public function index()
    {
        return view('welcome_message');
    }
}