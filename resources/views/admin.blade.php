@extends('layouts.app')

@section('content')
<h1 align="center">
  Hi Admin !
</h1>
    <div class="container">
       <div class="album py-5">
        <div class="container">
        <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow" style="width: 400;height:250px">
                <div class="card-body">
                  <p class="card-text" align="center"><b>Add Menu Makanan</b></p>
                  <p class="card-text">Disini admin bisa mengatur menu makanan.Mulai dari menambah menghapus atau mengedit menu yang ada.Admin juga bisa melihat/mengedit stok makanan disini !</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{route('daftarMakanan.add')}}" class="btn btn-outline-danger" style="color: #eb8322;">Go..!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow"  style="width: 400;height:250px">
                <div class="card-body">
                  <p class="card-text" align="center"><b>Histori Transaksi</b></p>
                  <p class="card-text">Disini admin bisa melihat seluruh history transaksi yang dilakukan di cashier !</p>
                  <br><br>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{route('historitransaksi.index')}}" class="btn btn-outline-danger" style="color: #eb8322;">Go..!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow"  style="width: 400;height:250px">
                <div class="card-body">
                  <p class="card-text" align="center"><b>Laporan</b></p>
                  <p class="card-text">Disini admin bisa melihat seluruh barang barang yang telah dibeli dan bisa melihat keuntungan total dan keuntungan per hari !</p>
                  <br><br>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/laporan" class="btn btn-outline-danger" style="color: #eb8322;">Go..!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
      </div>
</div>
@endsection