<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $tampung2 = Product::where('del_flag',1)->Orderby('id','desc')->get();

        return view('home',compact('tampung2'));
    }

public function Tambah(){
      return view('tambah');

}

    public function Input_data(Request $req){
        $input = new Product();
        $input->nama_barang = $req->nama_produk;
        $input->harga = $req->harga;
        $input->del_flag = 1 ;
        $input->save();
        return redirect('home'); 
    }

    public function Tampil_ubah($r){
        $da = Product::where('id',$r)->first();
        return view ('edit',compact('da'));
    }

    public function Input_ubah(Request $req){
        $update = Product::where('id',$req->id)->update([
            'nama_barang' => $req->nama_produk,
            'harga' => $req->harga ]);
        return redirect('home');
    }

    public function Delete($id)
    {
        $delete = Product::where('id',$id)->update(['del_flag' => 0 ]);
        return redirect('home');
    }
}
