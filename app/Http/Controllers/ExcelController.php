<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ExcelController extends Controller
{
    public function index(){
        $data = DB::table('mahasiswa')->get();

        return view('importexport', compact('data'));
    }

    public function import(Request $request){
        $this->validate($request, ['select_file'=>'required|mimes:xls,xlsx']);
        $path = $request->file('select_file')->getRealPath();
        $data = Excel::load($path)->get();

        if($data->count()>0){
            $value=$data->toArray();
                foreach($value as $row){
                    $insert_data[] = array(
                        'id'=>$row['id'],
                        'nis'=>$row['nis'],
                        'nama' =>$row['nama'],
                        'rayon'=>$row['rayon'],
                        'created_at'=>$row['created_at'],
                        'updated_at'=>$row['updated_at']
                    );
                }
            
            if(!empty($insert_data)){
                DB::table('mahasiswa')->insert($insert_data);
            }
        }
        return back()->with('success', 'excel imported successfully');

    }

}
