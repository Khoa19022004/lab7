<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleNhapSV;
use Illuminate\Http\Request;

class SvController extends Controller
{
    public function sv(){
        return view('nhapsv');
    }
    public function sv_store(RuleNhapSV $request){
        return 1;
    }
}