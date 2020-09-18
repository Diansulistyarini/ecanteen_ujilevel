<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelLogin;
use Illuminate\Support\Facades\Hash;

class Auth extends Controller
{

    public function login(Request $request){
        $datauser = $this->validate($request,[
            'username' => 'required',
            'pass' => 'required',
          ]);
        // $username = $request->post("username");
        $pass = Hash::make($datauser['pass']);

        $data = ModelLogin::where('name', $datauser['username'])->first();
        if ($data && Hash::check($request->pass, $data->password)) {  
            // Session::put('id',$data->id);
            // Session::put('role',$data->role);
            // Session::put('nama',$data->nama);
            // Session::put('email',$data->email);
            // Session::put('login',TRUE);
            if($data->role == "admin"){
                return redirect('/pageadmin');
            }else if($data->role == "kasir"){
                return redirect('/pagekasir');
            }else if($data->role == "owner"){
                return redirect('/pageowner');
            }else if($data->role == "witter"){
                return redirect('/pagewitter');
            }else{
                return redirect('/')->with('alert','User Tidak Ditemukan!');
            }     
        }else{
            return redirect('/')->with('alert','Password / Username Salah!');
        }
    }

    // public function logout(){
    //     Session::flush();
    //     return redirect('/')->with('alert','Anda Berhasil Logout!');
    // }

    public function admin(){
        dd("hello im admin");
    }

    public function witter(){
        dd("hello im witter");
    }

    public function owner(){
        dd("hello im owner");
    }

    public function kasir(){
        dd("hello im kasir");
    }

}