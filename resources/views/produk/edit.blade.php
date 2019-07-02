@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(session('produk'))
            <div class="alert alert-success" role="alert">
                {{session('produk')}}
            </div>
        @endif
            <div class="card">
                <div class="card-header">Silahkan Isi Data
                </div>

                <div class="card-body">
                    <form method="GET" action="/produk/{{ $produks -> id }}/update">
                        @csrf 

                        <div class="form-group row">
                            <label for="jepro" class="col-md-4 col-form-label text-md-right">Jenis Produk</label>

                            <div class="col-md-6">
                                <input id="jepro" type="text" class="form-control" name="jepro" value="{{$produks->jepro}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kobar" class="col-md-4 col-form-label text-md-right">Kode Barang</label>

                            <div class="col-md-6">
                                <input id="kobar" type="text" class="form-control" name="kobar" value="{{$produks->kobar}}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nabar" class="col-md-4 col-form-label text-md-right">Nama Barang</label>

                            <div class="col-md-6">
                                <input id="nabar" type="text" class="form-control" name="nabar" value="{{$produks->nabar}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vol" class="col-md-4 col-form-label text-md-right">Volume</label>

                            <div class="col-md-6">
                                <input id="vol" type="text" class="form-control" name="vol" value="{{$produks->vol}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="habar" class="col-md-4 col-form-label text-md-right">Harga Barang</label>

                            <div class="col-md-6">
                                <input id="habar" type="text" class="form-control" name="habar" value="{{$produks->habar}}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
