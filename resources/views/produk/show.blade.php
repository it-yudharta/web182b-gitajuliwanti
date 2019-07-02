@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class ="table">
                        <thead>
                        <tr>
                        <!-- <th scope="col">Nomor</th> -->
                        <th scope="col">Jenis Produk</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Volume</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col">Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $produks as $item)
                        <tr>
                        <!-- <td>{{$item->id}}</td> -->
                        <td>{{$item->jepro}}</td>
                        <td>{{$item->kobar}}</td>
                        <td>{{$item->nabar}}</td>
                        <td>{{$item->vol}}</td>
                        <td>{{$item->habar}}</td>
                        <td>
                            <a class="btn btn-warning" href="/produk/{{$item->id}}/edit" role="button">Edit</a>
                            <a class="btn btn-danger" href="/produk/{{$item->id}}/hapus" role="button">Hapus</a>
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
