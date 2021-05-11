<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

        $User = User::where('id', '=', auth()->id())->get();
        return

            view('historipengajuan', compact('User'));
    }

    public function Pengecekanberkas()
    {
        $User = User::all();
        return view('pengecekanberkas', compact('User'));
    }

    public function Pengajuandupakstore(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'lu_administrasi' => 'required',
            'lu_buktifisik' => 'required',
            'user_id' => 'required',
            'keterangan' => ''
        ]);

        // $this->validate($request,[
        // 	'nama' => 'required',
        //     'alamat' => 'required',
        //     'user_id' => 'required'
        // ]);

        Data::create([
            'lu_administrasi' => $request->lu_administrasi,
            'lu_buktifisik' => $request->lu_buktifisik,
            'user_id' => $request->user_id,
            'keterangan' => 'pengajuan dupak'
        ]);
        //     Session::flash('sukses','Ini notifikasi SUKSES');
        // return back();

        if ($validator->fails()) {
            Session::flash('gagal', 'pengajuan dokumen dupakmu gagal terupload');
            return back();
        } else {
            Session::flash('sukses', 'pengajuan dokumen dupakmu berhasil terupload');
            return back();
        }
    }

    public function Profile()
    {
        // $User = User::all();
        return view('profile');
    }

    public function Logout(Request $request)
    {

        Auth::logout();
        Session::flush();
        auth()->logout();
        return redirect('/login');
    }

    public function Checkid($id)
{
    $data = data::find($id);
   return view('pegawai_edit',compact('data'));
}


}