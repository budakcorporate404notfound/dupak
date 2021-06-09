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
            ->join('users', 'users.id', '=', 'histori_data.user_id')
            //->join('histori_data', 'histori_data.data_id', '=', 'data.id')
            ->select('histori_data.id', 'data.created_at', 'histori_data.user_id', 'users.name', 'histori_data.data_id', 'data.lu_buktifisik', 'data.lu_administrasi')
            // ->whereNull('histori_data.hasil_verifikator')
            ->where('hasil_verifikator', '=', '1')
            ->groupBy('data_id')
            ->havingRaw('count(data_id) = 2')
            ->get();
        return dd($data);
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

    public function Bagianfungsional2tu()
    {

        $data = DB::table('histori_data')
            ->rightjoin('data', 'data.id', '=', 'histori_data.data_id')
            ->join('users', 'users.id', '=', 'histori_data.user_id')
            //->join('histori_data', 'histori_data.data_id', '=', 'data.id')
            ->select('histori_data.id', 'data.created_at', 'histori_data.user_id', 'users.name', 'histori_data.data_id', 'data.lu_buktifisik', 'data.lu_administrasi')
            // ->whereNull('histori_data.hasil_verifikator')
            ->where('hasil_verifikator', '=', '1')
            ->groupBy('data_id')
            ->havingRaw('count(data_id) = 1')
            ->get();

        return view('bagianfungsional2tu', compact('data'));
    }

    public function Pengecekanberkas1()
    {

        $data = DB::table('histori_data')
            ->rightjoin('data', 'data.id', '=', 'histori_data.data_id')
            ->join('users', 'users.id', '=', 'data.user_id')
            //  ->join('histori_data', 'histori_data.data_id', '=', 'data.id')
            ->select('data.id', 'users.name', 'data.lu_administrasi', 'data.created_at', 'data.lu_buktifisik', 'histori_data.hasil_verifikator', 'data.user_id')
            ->whereNull('histori_data.hasil_verifikator')
            ->get();


        return view('pengecekanberkas1', compact('data'));
    }

    public function Pengajuandupakstore(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'lu_administrasi' => 'required',
            'lu_buktifisik' => 'required',
            'user_id' => 'required',
            'keterangan' => 'nullable'
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

    public function Checkberkas1($id)
    {

        $data = DB::table('data')

            ->join('users', 'users.id', '=', 'data.user_id')
            //  ->join('histori_data', 'histori_data.data_id', '=', 'data.id')
            ->select('data.id', 'users.name', 'data.lu_administrasi', 'data.lu_buktifisik', 'data.created_at', 'data.lu_buktifisik', 'data.user_id')
            ->where('data.id', '=', $id)
            ->get();


        return view('checkberkas1', compact('data'));
    }

    public function HistoriCheckid($id)
    {
        $User = User::where('id', '=', auth()->id())->get();
        $Data = Data::where('id', '=', $id)->get();

        // print($Data);
        return

            view('konten_histori', compact('Data', 'User'));
    }

    public function Senttotu(Request $request, $data_id, $user_id)
    {
        // DB::table("histori_data")->delete($id);

        $validator = Validator::make($request->all(), [
            'user_id' => 'nullable',
            'data_id' => 'nullable',
            'verifikator' => 'nullable',
            'hasil_verifikator' => 'nullable',
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
            'verifikator' => Auth::user()->name,
            'hasil_verifikator' => '1',
            'keterangan' => 'pengiriman berkas ke tu',
            'catatan' =>  '-'

        ]);
        //     Session::flash('sukses','Ini notifikasi SUKSES');
        // return back();

        if ($validator->fails()) {
            Session::flash('ditolak', 'terjadi kesalahan system. mohon check data yang di proses pada database');
            return redirect()->route('Bagianfungsional2tu');
        } else {
            Session::flash('diterima', 'proses pengajuan dupak');
            return redirect()->route('Bagianfungsional2tu');
        }


        // return response()->json(['success' => "Product Deleted successfully.", 'tr' => 'tr_' . $id]);
    }

    // public function deleteAll(Request $request)
    // {
    //     $ids = $request->ids;
    //     $data_id = $request->ids;


    //     DB::table("histori_data")->whereIn('id', explode(",", $ids))->insert([
    //         'user_id' => $data_id,
    //         'data_id' => '1',
    //         'verifikator' => '1',
    //         'hasil_verifikator' => '1',
    //         'keterangan' => '1',
    //         'catatan' => '1'
    //     ]);
    //     return response()->json(['success' => "Products Deleted successfully."]);
    // }


    public function Terimaatautolak1(Request $request)
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
            'keterangan' => 'pengecekan berkas tahap 1',
            'catatan' => $request->catatan,

        ]);
        //     Session::flash('sukses','Ini notifikasi SUKSES');
        // return back();

        if ($validator->fails()) {
            Session::flash('ditolak', 'terjadi kesalahan system. mohon check data yang di proses pada database');
            return redirect()->route('Pengecekanberkas1');
        } else {
            Session::flash('diterima', 'proses pengajuan dupak');
            return redirect()->route('Pengecekanberkas1');
        }
    }

    public function Pengecekanberkas2()
    {

        return view('pengecekanberkas2');
    }

    public function Tu2bps()
    {

        return view('tu2bps');
    }
}