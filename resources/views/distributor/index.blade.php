@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(session('distributor'))
            <div class="alert alert-success" role="alert">
                {{session('distributor')}}
            </div>
        @endif
            <div class="card">
                <div class="card-header">Silahkan Isi Data
                <a class="btn btn-primary float-right" href="/distributor/show">Show</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="/distributor/create">
                        @csrf

                        <div class="form-group row">
                            <label for="kode" class="col-md-4 col-form-label text-md-right">Kode Distributor</label>

                            <div class="col-md-6">
                                <input id="kode" type="text" class="form-control" name="kode" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jekel" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>

                            <div class="col-md-6">
                                <input id="jekel" type="text" class="form-control" name="jekel" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nohp" class="col-md-4 col-form-label text-md-right">Nomor HP</label>

                            <div class="col-md-6">
                                <input id="nohp" type="text" class="form-control" name="nohp" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Insert
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
