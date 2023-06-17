@extends('layouts.app')

@section('content')
@vite('resources/sass/app.scss')
@vite('resources/sass/_style.scss')
 <!-- About Me -->
 <section id=#about>
    <div class="container mt-4">
        <div class = "col" style=" padding-top : 100px;"></div>
        <h4>
        <center><b>LIST BARANG</b></h4></center>
        <hr>
        <div style="margin-left: 85%;">
        <a href="{{ route ('listbarang.create')}}" class="btn btn-success mb-3"><i class="bi bi-plus-lg">Tambah Barang</i></a>
        </div>
        <table class="table table-responsive table-bordered" style="padding-bottom : 20%;">
            <thead class = "table table-bordered table-success table-hover">
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Deskripsi Barang</th>
                    <th>Satuan Barang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($barangs as $barang)
              <tr>
                  <td>{{ $barang->KodeBarang}}</td>
                  <td>{{ $barang->NamaBarang}}</td>
                  <td>{{ $barang->HargaBarang}}</td>
                  <td>{{ $barang->DeskripsiBarang}}</td>
                  <td>{{ $barang->satuan->KodeSatuan}}</td>
                  <td>
                      <div class="d-flex" >
                          <a href="{{ route ('listbarang.show', ['listbarang' => $barang->id])}}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-sort-up"> Show</i></a>
                          <a href="{{ route ('listbarang.edit', ['listbarang' => $barang->id])}}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-pencil-square"> Edit</i></a>
                          <div>
                              <form action= "{{ route ('listbarang.destroy', ['listbarang' => $barang->id])}}" method="POST">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"> Delete</i></button>
                              </form>
                          </div>
                      </div>
                  </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
  </section>
  <!-- End About Me -->
  <br>
@vite('resources/js/app.js')
@endsection

