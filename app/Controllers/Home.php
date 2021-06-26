<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['main_view']   = 'v_dashboard';
        echo view('layout/template', $data);
    }
}