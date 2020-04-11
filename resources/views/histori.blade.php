@extends('layouts.app')

@section('content')
<div class="container">
     <a href="/admin" class="btn btn-secondary">Back</a>
     <br><br>
    <form class="form-inline" method="GET" action="/historitransaksi">
          <div>
          <input class="form-control mr-sm-2"  name="cari" type="search" placeholder="Search..." aria-label="Search" style="width: 20rem; height: 2rem;">
          <button class="btn btn-warning my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </div>
       </form>
       <br>
       <table class="table table-striped table-bordered table-light" align="center">
                <tr>
                  <td>ID Transaksi</td>
                  <td>Total Harga</td>
                  <td>Dibayar</td>
                  <td>Kembalian</td>
                  <td>Tanggal Transaksi</td>
                  <td>Detail Transaksi</td>
                </tr>
                @foreach($transaksi as $transaksi)
                <tr>
                  <td>{{ $transaksi->id }}</td>
                  <td>Rp. {{ $transaksi->total_harga }}</td>
                  <td>Rp. {{ $transaksi->dibayar }}</td>
                  <td>Rp. {{ $transaksi->kembalian }}</td>
                  <td> {{ $transaksi->created_at }}</td>
                  <td align="center">
                       <a href="{{ route('historitransaksi.info', $transaksi->id) }}"  class="btn btn-warning"><b>Info</b></a>
                  </td>
                </tr>
                @endforeach
          </table>


</div>





@endsection