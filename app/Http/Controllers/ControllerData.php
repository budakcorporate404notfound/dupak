<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\User;


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
        return view('historipengajuan', ['Data' => $Data]);
    }
}