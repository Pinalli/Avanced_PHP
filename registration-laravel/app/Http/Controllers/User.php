<?php

namespace App\Http\Controllers;

class User extends Controller
{
    public function register()
    {
        echo '10';
    }

    public function save(Request $request)
    {
        dd($request->all());
    }
}
