<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function tampil($nama) {
        return view('content', ['nama'=>$nama]);
    }
}
