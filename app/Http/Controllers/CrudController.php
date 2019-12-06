<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use DB;
use Redirect;

class CrudController extends Controller
{
    public function tambah_data(){
        $input = Request::input();
        $data = array(
            'nrp' => Request::get('nrp'),
            'nama' => Request::get('nama')

        );

        DB::table('mahasiswa')->insert($data);
        return Redirect::to('\read')->with('message','Berhasil menambah Data');
    }

    public function lihat_data(){
        $data = DB::table('mahasiswa')->get();
        return view('read',['mhs'=>$data]);
    }
}
