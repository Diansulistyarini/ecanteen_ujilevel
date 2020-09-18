<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use PDF;

class PosController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    // public function postLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required|min:5'
    //     ]);

    //     if (auth()->guard('admin')->attempt($request->only('email', 'password'))) {
    //         $request->session()->regenerate();
    //         $this->clearLoginAttempts($request);
    //         return redirect()->intended();
    //     } else {
    //         $this->incrementLoginAttempts($request);

    //         return redirect()
    //             ->back()
    //             ->withInput()
    //             ->withErrors(["Incorrect user login details!"]);
    //     }
    // }

    // public function postLogout()
    // {
    //     auth()->guard('admin')->logout();
    //     session()->flush();

    //     return redirect()->route('admin.login');
    // }

    public function cashier(){
        //mengambil data semua
            $menus = Menu::all();
            return view('cashier.homecashier',['menus'=> $menus] );
    }

    //show food
    public function showMenu()
    {
        $menus = Menu::all();
        return view('admin.menu', ['menus' => $menus]);
    }

    public function show()
    {
        $menus = Menu::all();
        return view('template.indexuser', ['menus' => $menus]);
    }

    public function homecashier()
    {
        return view('cashier.homecashier');
    }    

    //add menu
    function add_menu(Request $request)
    {
        $validateData = $request->validate([
            'menu_name' => 'required|min:3|max:30',
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required',
            'stock' => 'required',

        ]);
        dump($validateData);

        $image = $request->file('image');
        $name_file = $image->getClientOriginalName();
        $image->move(base_path('/public/upload'), $name_file);

        $menus = new Menu();
        $menus->menu_name = $validateData['menu_name'];
        $menus->image = $name_file;
        $menus->price = $validateData['price'];
        $menus->stock = $validateData['stock'];
        $menus->save();

        return redirect('/showMenu');

        // return "Data Berhasil Di simpan ke Database";
    }

    // edit food menu
    public function edit_menu($id_menu)
    {
        $menus = Menu::find($id_menu);
        return view('admin.edit_menu', ['menus' => $menus]);
    }

    //update menu
    public function update_menu($id_menu, Request $request)
    {
        $this->validate($request, [
            'menu_name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'stock' => 'required',

        ]);

        $menus = Menu::find($id_menu);
        $menus->menu_name = $request->menu_name;
        $menus->image = $request->image;
        $menus->price = $request->price;
        $menus->stock = $request->stock;
        $menus->save();

        return redirect('/showMenu');
    }

    //delete food
    public function del_food($id_menu)
    {
        $menus = Menu::find($id_menu);
        $menus->delete();
        return redirect('/showMenu');
    }

    public function cetak_pdf()
    {
        $menus = Menu::all();
        $pdf = 'PDF'::loadview('admin.menu_pdf',['menus'=> $menus]);
        return $pdf->download('menu_pdf.pdf');
    }
}
