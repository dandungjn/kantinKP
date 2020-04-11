@extends('layouts.app')

@section('content')
  <main role="main">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/canteen1.jpg" alt="First slide" style="filter: brightness(50%) blur(3px);">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>GET YOUR LUNCH HERE.</h1>
                <br>
                <br>
                <br>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="image/canteen3.jpg" alt="Second slide" style="filter: brightness(50%) blur(3px);">
            <div class="container">
              <div class="carousel-caption">
                <h1>GET YOUR LUNCH HERE.</h1>
                <br>
                <br>
                <br>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="image/canteen2.jpg" alt="Third slide" style="filter: brightness(50%) blur(3px);">
            <div class="container">
              <div class="carousel-caption">
                <h1>GET YOUR LUNCH HERE.</h1>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Kantin Wikrama</h1>
          <p class="lead text-muted">
              Kantin SMK Wikrama menyediakan berbagai makanan mulai dari makanan ringan hingga makanan berat yang sehat dan tentunya dengan harga yang pas di kantung pelajar.
          </p>
          <br>
          <br>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        <h2 style="text-align: center;">MENU</h2> 
        <br>
        <form class="form-inline my-2 my-lg-0" method="GET" action="/makanan" style="margin-left: 7rem">
        	<div align="center">
          <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Temukan menu favoritmu!" aria-label="Search" style="width: 50rem; height: 2rem;">
          <button class="btn btn-warning my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
       	    </div>
       </form>
       <br>
        <div class="row">
          @foreach($daftar_makanan as $daftar_makanan)  
            <div class="col-md-4">
              <div class="card mb-4 box-shadow" style="outline: 100px;">
<div style=" background-image: url('../gallery/makanan/{{ $daftar_makanan->gambar_makanan }}');height: 250px;width: 100%;background-repeat: no-repeat;background-size: contain;background-position: center ;">
</div>
                <div class="card-body">
                  <p class="card-text"><b>{{$daftar_makanan->nama_makanan}}</b></p>
                  <p class="card-text"><b>Rp. {{$daftar_makanan->harga_makanan}}</b></p>
                  <p class="card-text"><b>STOK : {{$daftar_makanan->stok_makanan}}</b></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
               <a href="#" class="btn btn-outline-danger" style="color: #eb8322;" data-toggle="modal"  data-target="#myModal-{{$daftar_makanan->id}}">Tambahkan ke keranjang</a>
               
               <form method="post" action="{{ route('keranjang.store') }}">  
                @csrf
            <div class="modal fade" id="myModal-{{$daftar_makanan->id}}">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h1>Masukan Jumlah nya !</h1>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Makanan :</label>
                                <input type="text" class="form-control" name="nama_makanan" readonly="true" value="{{$daftar_makanan->nama_makanan}}">
                                <input type="hidden" class="form-control" name="id_makanan" value="{{$daftar_makanan->id}}">
                                <input type="hidden" name="stok_makanan" value="{{$daftar_makanan->stok_makanan}}">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Harga Makanan :</label>
                                <input type="text" class="form-control" name="harga_makanan" readonly="true" value="{{$daftar_makanan->harga_makanan}}"></div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Jumlah Makanan :</label>
                                <input type="text" class="form-control" name="jumlah_makanan" required="true">
                              </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-warning" style="color: black;">confirm</button>
                              <a class="btn btn-warning" style="color: black;" data-dismiss="modal" value="Close" href="#">cancel</a>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach


@endsection