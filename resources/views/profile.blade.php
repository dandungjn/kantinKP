@extends('layouts.app')
@section('content')
<main role="main">
                <div class="container">
                <div class="card shadow p-3 mb-5">
                <div class="card-body" align="center" style="width: 40">
                <form>
               <h2 align="center" style="color: #eb8322"><b>Hi {{Auth::user()->name}} !</b></h2>
               <br>
               <h5><b>Saldo anda :</b></h5>
               <h5 style="color: #eb8322"><b>Rp.</b></h5>
               <br>
               <h5 style="color: #eb8322"><b>Makanan yang belum diambil </b></h5>
               <br>
               <table class="table">
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
                  <td>
                       <a href="{{ route('historitransaksiprofile.info', $transaksi->id) }}"  class="btn btn-warning"><b>Info</b></a>
                  </td>
                </tr>
                @endforeach
               </table>
               
            </form>
        </div>
      </div>
        </div>
        </div>
          </div>
        </div>
      </div>

    </main>

@endsection