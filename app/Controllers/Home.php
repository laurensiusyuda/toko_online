<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //memanggil view
        //melakukan parsing data controller
        return view('index/index');
    }
}
