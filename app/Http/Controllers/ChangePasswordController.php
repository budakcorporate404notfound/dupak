<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Session;
use Validator;





class ChangePasswordController extends Controller
{
    //
    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {

        return view('profile');
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function store(Request $request)

    {

        $validator = Validator::make($request->all(), [

            'current_password' => ['required', new MatchOldPassword],

            'new_password' => ['required'],

            'new_confirm_password' => ['same:new_password'],

        ]);

        // $validator = Validator::make($request->all(), [
        //     'nama' => 'required',
        //     'alamat' => 'required',
        //     'user_id' => 'required'
        // ]);



        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);


        if ($validator->fails()) {
            Session::flash('gagal', 'pembaruan password gagal');
            return back();
        } else {
            Session::flash('sukses', 'pembaruan password berhasil');
            return back();
        }
    }
}