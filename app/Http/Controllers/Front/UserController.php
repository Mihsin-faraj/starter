<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showUserName()
    {
        return 'Mohsin Farajallah';
    }

    public function showMsg()
    {
        return 'welcome';
    }

    public function addparameter($id)
    {
        return $id + 2;
    }

    public function addOrNot()
    {
        return 'add or not add';
    }

    public function showUserPrefix()
    {
        return 'Work';
    }

    public function middlewareAuth()
    {
        return 'Auth';
    }

    public function LoginFunc()
    {
        return 'Login Successfully';
    }

    public function showLanding()
    {
        return view('landing');
    }
}
