@extends('layouts.app')

@section('content')
@isset ($edit_makanan)
<form method="post" action="{{ route('daftarMakanan.update', $edit_makanan->id ) }}">
  <table>
  @csrf
  <tr>
    <td>Nama Makanan :</td>
  <td><input type="text" name="nama_makanan" value="{{ $edit_makanan->nama_makanan }}"></td>
  </tr>
  <tr>
    <td>Harga Makanan :</td>
  <td><input type="number" name="harga_makanan" value="{{ $edit_makanan->harga_makanan }}"></td>
  </tr>
  <tr>
    <td>Gambar Makanan :</td>
  <td><input type="file" name="gambar_makanan" value="{{ $edit_makanan->gambar_makanan }}"></td>
  </tr>
  <tr>
    <td>Stok Makanan :</td>
  <td><input type="number" name="stok_makanan" value="{{ $edit_makanan->stok_makanan }}"></td>
  </tr>
  <tr>
    <td>Nama Supplier :</td>
  <td><input type="text" name="nama_supplier" value="{{ $edit_makanan->nama_supplier }}"></td>
  </tr>
  <tr>
  <td><button type="submit">UPDATE</button></td>
  </tr>
</table>
</form>
@else
<form method="post" action="{{ route('daftarMakanan.store') }}" enctype="multipart/form-data">
	@csrf
<div class="container">
     <a href="/admin" class="btn btn-secondary">Back</a>
     <br><br>
     <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Add new menu</a>    
     
  <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Create Menu</h1>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Nama Makanan</label>
                              <input type="text" class="form-control" name="nama_makanan" required="true">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Harga Makanan</label>
                              <input type="number" class="form-control" name="harga_makanan">
                        </div>
                        <div class="form-group">
                              <label for="exampleFormControlInput1">Gambar Makanan</label>
                              <input type="file" class="form-control" name="gambar_makanan">
                        </div>
                        <div class="form-group">
                              <label for="exampleFormControlInput1">Stok Makanan</label>
                              <input type="number" class="form-control" name="stok_makanan">
                        </div>
                        <div class="form-group">
                              <label for="exampleFormControlInput1">Nama Supplier</label>
                              <input type="text" class="form-control" name="nama_supplier">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-danger" style="color: #eb8322;">confirm</button>
                            <a class="btn btn-outline-danger" style="color: #eb8322;"  data-dismiss="modal" value="Close" href="#">cancel</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <br>  
    <br>


    <form class="form-inline" method="GET" action="/addmenu">
          <div>
          <input class="form-control mr-sm-2"  name="cari"  placeholder="Search..." aria-label="Search" style="width: 20rem; height: 2rem;">
          <button class="btn btn-warning my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </div>
       </form>
       <br><br><br>
             
          <table class="table table-striped table-bordered table-light" align="center">
                <tr>
                  <td>Nama</td>
                  <td>Harga</td>
                  <td>Stok</td>
                  <td>Supplier</td>
                  <td>Action</td>
                </tr>
                @foreach($daftar_makanan as $daftar_makanan)
                <tr>
                  <td>{{ $daftar_makanan->nama_makanan }}</td>
                  <td>Rp. {{ $daftar_makanan->harga_makanan }}</td>
                  <td>{{ $daftar_makanan->stok_makanan }}</td>
                   <td>{{ $daftar_makanan->nama_supplier }}</td>
                  <td>
                       <a href="{{ route('daftarMakanan.edit', $daftar_makanan->id) }}"  class="btn btn-primary" >Edit</a>
                     <a href="{{ route('daftarMakanan.delete', $daftar_makanan->id) }}"  class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
          </table>
        </div>
      </div>
    


@endif





@endsection