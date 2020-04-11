@extends('layouts.app')

@section('content')
 <main role="main">
                <div class="container">
                <div class="card shadow p-3 mb-5">
                <div class="card-body">
                <form>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nama Makanan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga Satuan</th>
                        <th scope="col">Total</th>
                        <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($info_transaksi as $info_transaksi)
                        <tr>
                        <td>{{ $info_transaksi->nama_makanan }}</td>
                        <td>{{ $info_transaksi->jumlah_makanan }}</td>
                        <td>Rp. {{ $info_transaksi->harga_makanan }}</td>
                        <td>Rp. {{ $info_transaksi->total_harga }}</td>
                        <td>{{ $info_transaksi->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>

                <div class="row mt-5">
                    <div class="col-sm-8">
                      <a href="/historitransaksi" class="btn btn-secondary">Back</a>
                    </div>
                    </div>
                </div>
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