@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Cari Penjualan</div>

                <div class="card-body">
                    <form method="GET" action="/toko/jual2">
                    
                        <div class="form-group row">
                            <label for="kodeBrg" class="col-md-4 col-form-label text-md-right">Kode Barang</label>

                            <div class="col-md-6">
                                <input id="kodeBrg" type="text" class="form-control" name="kodeBrg" placeholder="Masukkan Kode Barang">
                            </div>
                                <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Jual Barang</div>

                <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Banyak</th>
                        <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $tokos as $item)
                        <tr>
                            <td>{{$item->namaBrg}}</td>
                            <td>{{$item->stok}}</td>
                            <td>{{$item->hrgJual}}</td>
                            <td>
                            <input name="jumlah" id="jumlah" type="number" class="form-control form-control-sm" name="jumlah" placeholder="Jumlah Barang">
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="/items/edit/{{$item->id}}">Hitung</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Barang</th>
                        <th scope="col">Total</th>
                        <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $tokos as $item)
                        <tr>
                            <td>{{$item->namaBrg}}</td>
                            <td>
                            <input name="total" id="total" type="number" class="form-control form-control-sm" name="total" placeholder="Total Harga" value="">
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="/items/edit/{{$item->id}}">Kirim</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
