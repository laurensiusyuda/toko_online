<?php
//untuk menampung login dan register
namespace App\Controllers;
//membuat class auth 
class Auth extends BaseController
{
    //membuat function untuk register
    public function register()
    {
        //menampilkan logik untuk menampung form register
        //membuat view register 
        return view('Auth/register');
    }
    //membuat fungsi untuk login 
    public function login()
    {
        //membuat view login
        return view('Auth/login');
    }
    //membuat fungsi untuk logout 
    public function logout()
    {
    }
}
