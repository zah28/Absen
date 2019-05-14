@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Beranda
                    <a 
                        class="btn btn-success float-right" role="button" href="{{ url('/toko/show') }}">
                        Kembali
                    </a>
                </div>

                <div class="card-body">
                    <form method="POST" action="/toko/update/{{$tokos->id}}">
                        @csrf
                                <div class="form-group">
                                <label for="namaBrg">Nama Barang</label>
                                <input name="namaBrg" type="text" class="form-control" id="namaBrg" placeholder="Nama" value="{{ ($tokos->namaBrg) }}">
                                </div>
                                <div class="form-group">
                                <label for="kodeBrg">Kode Barang</label>
                                <input name="kodeBrg" type="text" class="form-control" id="kodeBrg" placeholder="kodeBrg" value="{{ ($tokos->kodeBrg) }}">
                                </div>
                                <div class="form-group">
                                <label for="stok">Stok</label>
                                <input name= "stok" type="number" class="form-control" id="stok" placeholder="stok" value="{{ ($tokos->stok) }}">
                                </div>
                                <div class="form-group">
                                <label for="hrgGrosir">Harga Grosir</label>
                                <input name= "hrgGrosir" type="number" class="form-control" id="hrgGrosir" placeholder="hrgGrosir" value="{{ ($tokos->hrgGrosir) }}">
                                </div>
                                <div class="form-group">
                                <label for="hrgJual">Harga Jual</label>
                                <input name= "hrgJual" type="number" class="form-control" id="hrgJual" placeholder="hrgJual" value="{{ ($tokos->hrgJual) }}">
                                </div>
                                <button type="submit" class="btn btn-primary float-right" value="submit">Update</button>
                            </div>
                        </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
