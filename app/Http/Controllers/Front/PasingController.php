<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasingController extends Controller
{
    public function passingVariables()
    {
        $data = [];
        $data['name'] = 'mohsin';
        $data['id'] = 5;

        return view('welcome', $data);
    }

    public function passingObject()
    {
        $obj = new \stdClass();

        $obj -> name = 'mohsin';
        $obj -> id = 5;
        $obj -> age = 23;

        return view('welcome').with('name', 'Moshin');
        //return view('welcome', compact('obj'));

    }

}
