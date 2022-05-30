<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name = null){
        $name = "Ulug'murod";
//        $plans = ['prenium','gold','red'];
        return view('users.show',[
            "username" => $name,
//            'plans' => $plans
        ]);
    }

    public function list()
    {
        $userlist = [
          'Komil',
            'Karim',
            'Salim',
            'Begzod',
            'Sunnatillo'
        ];

        $plans = ['prenium','gold','red'];
        return view('users.list',compact('userlist','plans'));
    }
}
