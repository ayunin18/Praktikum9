@extends('layouts.app')

@section('content')
@vite('resources/sass/app.scss')
@vite('resources/sass/_style.scss')

    <!-- Content-->

    <div class="container-sm mt-5" style=" padding-top : 50px;">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-6">

                <div class="mb-3 text center" >
                    <center><i class="bi bi-box-arrow-up fs-1"></i>
                    <h4>Detail Barang</h4></center>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="KodeBarang" class="form-label">Kode Barang</label>
                        <h5>{{ $barang->KodeBarang}}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="NamaBarang" class="form-label">Nama Barang</label>
                        <h5>{{ $barang->NamaBarang}}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="HargaBarang" class="form-label">Harga Barang</label>
                        <h5>{{ $barang->HargaBarang}}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="DeskripsiBarang" class="form-label">Deskripsi Barang</label>
                        <h5>{{ $barang->DeskripsiBarang}}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="SatuanBarang" class="form-label">Satuan Barang</label>
                        <h5>{{ $barang->satuan->KodeSatuan}}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('listbarang.index')}}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"> Back</i></a>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- End Content-->
<br>
@vite('resources/js/app.js')
@endsection

