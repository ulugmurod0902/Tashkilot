<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('app');
    }

    public function about()
    {
        return view('about');
    }


   /* public function member()
    {
        $aa=['vtyguy','byuvr5c','gctdtrv'];
        return view('users.list', ['plans' => $aa]
        );
    }*/
}
