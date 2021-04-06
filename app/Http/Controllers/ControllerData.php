<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\User;

use Session;
use Validator;


class ControllerData extends Controller
{
    // public function Data()
    // {
    //     $data = data::all();
    //     return view('data', ['data' => $data]);
    // }

    public function User()
    {
        $User = User::all();
        return view('pengajuandupak', ['User' => $User]);
    }

    public function Historipengajuan()
    {
        $Data = Data::all();
        return 
        
        view('historipengajuan', ['Data' => $Data]);
    }

    public function Pengajuandupakstore(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'user_id' => 'required'
        ]);

    	// $this->validate($request,[
    	// 	'nama' => 'required',
        //     'alamat' => 'required',
        //     'user_id' => 'required'
    	// ]);
 
        Data::create([
    		'nama' => $request->nama,
            'alamat' => $request->alamat,
            'user_id' => $request->user_id
    	]);
        //     Session::flash('sukses','Ini notifikasi SUKSES');
        // return back();
        
        if ($validator->fails()) {
            Session::flash('gagal','Ini notifikasi GAGAL');
            return back();
        } else {
            Session::flash('sukses','Ini notifikasi SUKSES');
            return back();
        }
    }
}