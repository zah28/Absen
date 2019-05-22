@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Menampilkan Data
                    <a 
                        class="btn btn-success float-right" role="button" href="{{ url('/toko') }}">
                        Kembali
                    </a>
                </div>
            <div class="card-body">
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Harga Grosir</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $tokos as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->namaBrg}}</td>
                        <td>{{$item->kodeBrg}}</td>
                        <td>{{$item->stok}}</td>
                        <td>{{$item->tglMasuk}}</td>
                        <td>Rp {{$item->hrgGrosir}}</td>
                        <td>Rp {{$item->hrgJual}}</td>
                        <td>
                            <a class="btn btn-outline-warning btn-sm" href="/toko/edit/{{$item->id}}">Edit</a>
                            <a class="btn btn-outline-danger btn-sm" href="/toko/delete/{{$item->id}}">Hapus</a>
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
