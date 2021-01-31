<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    //
    public function __construct()
    {
        $this -> middleware('auth');
    }

    public function show1()
    {
        return 'show1';
    }

    public function show2()
    {
        return 'show2';
    }

}
