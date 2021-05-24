<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\User;
use App\Models\Histori_data;
use Illuminate\Support\Facades\Auth;

use Session;
use Validator;
use Illuminate\Support\Facades\DB;


class ControllerData extends Controller
{
    // public function Data()
    // {
    //     $data = data::all();
    //     return view('data', ['data' => $data]);
    // }

    public function testquery()
    {
        $data = DB::table('histori_data')
            ->rightjoin('data', 'data.id', '=', 'histori_data.data_id')
            ->join('users', 'users.id', '=', 'data.user_id')
            //  ->join('histori_data', 'histori_data.data_id', '=', 'data.id')
            ->select('users.id', 'users.name', 'data.lu_administrasi', 'data.created_at', 'data.lu_buktifisik', 'histori_data.hasil_verifikator')
            ->whereNull('histori_data.hasil_verifikator')

            ->get();

        print($data);
    }



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

        $data = DB::table('histori_data')
            ->rightjoin('data', 'data.id', '=', 'histori_data.data_id')
            ->join('users', 'users.id', '=', 'data.user_id')
            //  ->join('histori_data', 'histori_data.data_id', '=', 'data.id')
            ->select('data.id', 'users.name', 'data.lu_administrasi', 'data.created_at', 'data.lu_buktifisik', 'histori_data.hasil_verifikator', 'data.user_id')
            ->whereNull('histori_data.hasil_verifikator')

            ->get();


        return view('pengecekanberkas', compact('data'));
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

        $data = DB::table('data')

            ->join('users', 'users.id', '=', 'data.user_id')
            //  ->join('histori_data', 'histori_data.data_id', '=', 'data.id')
            ->select('data.id', 'users.name', 'data.lu_administrasi', 'data.lu_buktifisik', 'data.created_at', 'data.lu_buktifisik', 'data.user_id')
            ->where('data.id', '=', $id)
            ->get();


        return view('pegawai_edit', compact('data'));
    }

    public function HistoriCheckid($id)
    {
        $User = User::where('id', '=', auth()->id())->get();
        $Data = Data::where('id', '=', $id)->get();
        
        // print($Data);
        return

        view('konten_histori', compact('Data','User'));
    }

    public function Updateid(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'data_id' => 'required',
            'verifikator' => 'required',
            'hasil_verifikator' => 'required',
            'keterangan' => 'nullable',
            'catatan' => 'nullable'
        ]);

        // $this->validate($request,[
        // 	'nama' => 'required',
        //     'alamat' => 'required',
        //     'user_id' => 'required'
        // ]);

        Histori_data::create([
            'user_id' => $request->user_id,
            'data_id' => $request->data_id,
            'verifikator' => $request->verifikator,
            'hasil_verifikator' => $request->hasil_verifikator,
            'keterangan' => 'pengecekan berkas',
            'catatan' => $request->catatan,
            
        ]);
        //     Session::flash('sukses','Ini notifikasi SUKSES');
        // return back();

        if ($validator->fails()) {
            Session::flash('ditolak', 'terjadi kesalahan system. mohon check data yang di proses pada database');
            return redirect()->route('Pengecekanberkas');
        } else {
            Session::flash('diterima', 'proses pengajuan dupak');
            return redirect()->route('Pengecekanberkas');
        }
    }
}