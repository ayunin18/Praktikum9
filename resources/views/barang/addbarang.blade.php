@extends('layouts.app')

@section('content')

<!-- Content-->
<div class="container-sm mt-5" style=" padding-top : 50px;">
    <form action="{{ route('listbarang.store')}}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-6">
                <div class="mb-3 text center">
                    <center><i class="bi bi-patch-plus-fill fs-1"></i>
                    <h4>Form Input Barang</h4></center>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="KodeBarang" class="form-label">Kode Barang</label>
                        <input class="form-control @error('KodeBarang') is-invalid @enderror" type="text" name="KodeBarang" id="KodeBarang" placeholder="Enter Kode Barang" value="{{ old('KodeBarang') }}">
                        @error('KodeBarang')
                            <div class="text-danger"><small>{{ $message}}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="NamaBarang" class="form-label">Nama Barang</label>
                        <input class="form-control @error('NamaBarang') is-invalid @enderror" type="text" name="NamaBarang" id="NamaBarang" placeholder="Enter Nama Barang" value="{{ old('NamaBarang') }}">
                        @error('NamaBarang')
                            <div class="text-danger"><small>{{ $message}}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="HargaBarang" class="form-label">Harga Barang</label>
                        <input class="form-control @error('HargaBarang') is-invalid @enderror" type="text" name="HargaBarang" id="HargaBarang" placeholder="Enter Harga Barang" value="{{ old('HargaBarang') }}">
                        @error('HargaBarang')
                            <div class="text-danger"><small>{{ $message}}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="DeskripsiBarang" class="form-label">Deskripsi Barang</label>
                        <input class="form-control @error('DeskripsiBarang') is-invalid @enderror" type="text" name="DeskripsiBarang" id="DeskripsiBarang" placeholder="Enter Deskripsi Barang" value="{{ old('DeskripsiBarang') }}">
                        @error('DeskripsiBarang')
                            <div class="text-danger"><small>{{ $message}}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="SatuanBarang" class="form-label">Satuan Barang</label>
                        <select name="SatuanBarang" id="SatuanBarang" class="form-select">
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}" {{ old('SatuanBarang') == $satuan->id ? 'selected' : ''}}>{{ $satuan->KodeSatuan.' - '.$satuan->NamaSatuan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('listbarang.index')}}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"> Cancel</i></a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-check-circle me-2"> Submit</i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- End Content-->
<br>

@endsection
