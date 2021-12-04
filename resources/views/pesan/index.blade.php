@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="/home" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back to Home</a>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                </ol>
              </nav>
        </div>
        <div class="col-md-12">
           <div class="card">
               <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('uploads') }}/{{ $barang->gambar }}" width="400"  alt="...">
                    </div>
                    <div class="col-md-6 mt-5">
                        <h1>{{ $barang->nama_barang }}</h1>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td>Rp. {{ number_format($barang->harga) }}</td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>:</td>
                                    <td>{{ number_format($barang->stok) }}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td>{{ $barang->keterangan }}</td>
                                </tr>
                                    <tr>
                                        <td>Jumlah Pesanan</td>
                                        <td>:</td>
                                        <td>
                                            <form action="{{ url('pesan') }}/{{ $barang->id }}" method="POST">
                                                @csrf
                                                <input type="text" name="jumlah_pesan" required class="form-control">
                                                <button class="btn btn-primary mt-3" type="submit"><i class="fa fa-shopping-cart"></i> Masukkan ke Keranjang</button>
                                            </form>
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-shopping-cart"></i> Masukkan ke Keranjang</button>
                                        </td>
                                    </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
