@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('toko'))
              <div class="alert alert-success" role="alert">
                {{session('toko')}}
              </div>
            @endif
            <div class="card">
                <div class="card-header">Masukan Data Barang
                    <a 
                        class="btn btn-outline-primary float-right" role="button" href="{{ url('/toko/show') }}">
                        Tampilkan Data
                    </a>
                </div>

                <div class="card-body">
                    <form method="POST" action="/toko/create">
                      {{csrf_field()}}
                            <div class="form-group">
                              <label for="namaBrg">Nama Barang</label>
                              <input name="namaBrg" type="text" class="form-control" id="namaBrg" placeholder="Nama">
                            </div>
                            <div class="form-group">
                              <label for="kodeBrg">Kode Barang</label>
                              <input name="kodeBrg" type="text" class="form-control" id="kodeBrg" placeholder="kodeBrg">
                            </div>
                            <div class="form-group">
                              <label for="stok">Stok</label>
                              <input name= "stok" type="number" class="form-control" id="stok" placeholder="stok">
                            </div>
                            <div class="form-group">
                              <label for="hrgGrosir">Harga Beli</label>
                              <input name= "hrgGrosir" type="number" class="form-control" id="hrgGrosir" placeholder="hrgGrosir">
                            </div>
                            <div class="form-group">
                              <label for="hrgJual">Harga Jual</label>
                              <input name= "hrgJual" type="number" class="form-control" id="hrgJual" placeholder="hrgJual">
                            </div>
                              <button type="submit" class="btn btn-primary float-right" value="submit">Simpan</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
