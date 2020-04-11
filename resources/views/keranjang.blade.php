@extends('layouts.app')
@section('content')
@isset ($edit_keranjang)
<form method="post" action="{{ route('keranjang.update', $edit_keranjang->id ) }}">
  <table align="center">
  @csrf
  <tr>
    <td>Jumlah Makanan :</td>
  <td><input type="text" name="jumlah_makanan" value="{{ $edit_keranjang->jumlah_makanan }}"></td>
  </tr>
  <tr>
  <td><input type="hidden" name="harga_makanan" value="{{ $edit_keranjang->harga_makanan }}"></td>
  </tr>
  <td><button type="submit" class="btn btn-success">UPDATE</button></td>
  </tr>
</table>
</form>
@else

<form method="post" action="{{route('transaksi.store')}}">
  @csrf
<main role="main">
                <div class="container">
                <div class="card shadow p-3 mb-5">
                <div class="card-body">
                <form>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($keranjang as $keranjang)
                        <tr>
                        <td>{{$keranjang->nama_makanan}}</td>
                        <td>{{$keranjang->harga_makanan}}</td>
                        <td>{{$keranjang->jumlah_makanan}}</td>
                        <td>{{$keranjang->total_harga}}</td>
                        <td>
                       <a href="{{ route('keranjang.edit', $keranjang->id) }}" class="btn btn-outline-danger" style="color: #eb8322;">Edit</a>
                       <a href="{{ route('keranjang.delete', $keranjang->id) }}" class="btn btn-outline-danger" style="color: #eb8322;">Delete</a>
                       </td>
                        </tr>
                      @endforeach  
                        <tr>
                        <th>Total</th>
                        <td></td>
                        <td></td>
                        <th>{{$subtotal}}</th>
                        
                        </tr>
                    </tbody>
                    
                </table>

                <div class="row mt-5">
                    <div class="col-sm-8">
                        <p class="h5">Pembayaran</p>
                    </div>
                    <div class="col-sm">
                        <a href="#" class="btn btn-warning"><i class="fa fa-credit-card"></i> E-Canteen</a>
                    </div>
                    <div class="col-sm">
                                <!-- Button trigger modal -->
 <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">$ Tunai</a>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PEMBAYARAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1"><b>Total Rp. {{ $subtotal }}</b></label>
            <input type="hidden" name="total_harga" value="{{ $subtotal }}" id="subtotal">
      </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Dibayar</label>
            <input type="number" class="form-control" name="dibayar"  id="dibayar" onkeyup="kembali()">
            <script>
          function kembali() {
                  var x = document.getElementById("subtotal").value;
                  var y = document.getElementById("dibayar").value;
                  var awe = y - x;
                  console.log(awe);
          document.getElementById("demo").value = awe;
                  }
          </script>

          
      </div>
      <div class="form-group">
            <label for="exampleFormControlInput1">Kembalian</label>
            <input type="number" class="form-control" name="kembalian" id="demo"> 
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Bayar</button>
      </div>
    </div>
  </div>
</div>
</div>
  </div>
       </div>
      </div>
        </div>
        </div>
          </div>
        </div>
      </div>
       </form>
    </main>
@endif
@endsection