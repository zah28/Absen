<?php

namespace App\Http\Controllers;

use App\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko.index');
    }

     public function create(Request $request)
    {
        $tambah = new Toko;
        $tambah->namaBrg = $request['namaBrg'];
        $tambah->kodeBrg = $request['kodeBrg'];
        $tambah->stok = $request['stok'];
        $tambah->tglMasuk = date('Y-m-d');
        $tambah->hrgGrosir = $request['hrgGrosir'];
        $tambah->hrgJual = $request['hrgJual'];
        $tambah->save();

        return redirect()->back()->with('toko','Simpan data telah Berhasil');
    }

    public function show()
    {
        $toko = Toko::paginate(10);

        return view('toko.show',  ['tokos' => $toko]);
    }

    public function jual()
    {
        $toko = Toko::paginate(10);

        return view('toko.jual',  ['tokos' => $toko]);
    }
    public function jual2(Request $request)
    {
        // menangkap data pencarian
		$kode = $request->kodeBrg;
 
		// mengambil data dari table pegawai sesuai pencarian data
		$toko = DB::table('tokos')
        ->where('kodeBrg', '=', $kode)
        ->paginate();
        
		// mengirim data pegawai ke view index
        return view('toko.jual',  ['tokos' => $toko]);
    }

    public function edit($id)
    {
        $toko = Toko::find($id);  
        return view('toko.edit',['tokos'=>$toko]);

    }
    public function update(Request $request, $id)
    {
        $toko = Toko::find($id); 
        $toko->update($request->all());
        return redirect('/toko/show');
    }
    public function destroy($id)
    {
        $delete = Toko::where('id',$id);
        $delete->delete();

        return redirect()->to('/toko/show');
    }
}
