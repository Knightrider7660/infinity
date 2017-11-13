<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
{
    public function index(){
        $area = DB::table('area')->get();
        return view('area')->with(['table' => $area]);
    }

    public function save(Request $request){

       $request->name;

        DB::table('area')->insert(
            ['name' => $request->name]
        );

        return back();
    }
}
