<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function test()
    {

        $a = User::create(['uName'=>'aaaa','uPassword'=>'444']);
        dd($a);
    }
}
