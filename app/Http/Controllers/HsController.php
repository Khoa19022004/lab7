<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HsController extends Controller
{
    public function hs(){
        return view('hs');
    }
    public function hs_store(Request $request){
        $request->validate([
            $request->validate([             
                'hoten' => ['required','min:3','max:20'],             
                'tuoi' => 'required|integer|min:16|max:100',             
                'ngaysinh' =>['required','date'],
            ],[
                'hoten.required'=>"Vui lòng không để trống",
                'tuoi.required'=>"Vui lòng không để trống",
                'ngaysinh.required'=>"Vui lòng không để trống",
            ])             
        ]);
    }
}