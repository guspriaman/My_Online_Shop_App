<?php

namespace App\Controllers;

class Laporan extends BaseController
{
    public function index()
    {
        // return view('welcome');
        echo view("template/header");
        echo view("template/sidebar");
        echo view("template/footer");
   }
}



