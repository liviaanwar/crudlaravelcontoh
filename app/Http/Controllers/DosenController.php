<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama="Hupla";
        $hobi =["makan","tidur","ngoding"];
        return view('biodata',['nama'=> $nama, 'kesukaan' => $hobi]);
    }
}
