@extends('layouts.app')

@section('content')
<div class="container">
     <a href="/admin" class="btn btn-secondary">Back</a>
     <br><br>
    <form class="form-inline" method="GET" action="/laporan">
          <div>
          <input class="form-control mr-sm-2"  name="cari" type="date" placeholder="Search..." aria-label="Search" style="width: 20rem; height: 2rem;">
          <button class="btn btn-warning my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </div>
       </form>
       <br>
       <table class="table table-striped table-bordered table-light" align="center">
                <tr>
                  <td>ID Transaksi</td>
                  <td>Nama Makanan</td>
                  <td>Jumlah Makanan</td>
                  <td>Harga Makanan</td>
                  <td>Total Harga</td>
                  <td>Tanggal</td>
                </tr>
                @foreach($detail_transaksi as $detail_transaksi)
                <tr>
                  <td>{{ $detail_transaksi->id_transaksi }}</td>
                  <td>{{ $detail_transaksi->nama_makanan }}</td>
                  <td>{{ $detail_transaksi->jumlah_makanan }}</td>
                  <td>Rp. {{ $detail_transaksi->harga_makanan }}</td>
                  <td>Rp. {{ $detail_transaksi->total_harga  }}</td>
                  <td>{{ $detail_transaksi->created_at  }}</td>
                </tr>
                @endforeach
          </table>
          <br>
          <h5 style="color: black;" align="center"><b>KEUNTUNGAN : Rp. {{$subtotal}}</b></h5>


</div>





@endsection