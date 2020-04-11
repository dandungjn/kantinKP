<?php

namespace App\Http\Controllers;
use App\User;
use App\daftarMakanan;
use App\keranjang;
use redirect;
use Illuminate\Http\Request;

class keranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjang = keranjang::all();
        $subtotal = keranjang::sum('total_harga');
        return view('keranjang',compact('keranjang','subtotal'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $total = $request->harga_makanan * $request->jumlah_makanan;
         keranjang::create([
            'id_makanan' => request('id_makanan'),
            'nama_makanan' => request('nama_makanan'),
            'harga_makanan'=> request('harga_makanan'),
            'stok_makanan'=> request('stok_makanan'),
            'jumlah_makanan' => request('jumlah_makanan'),
            'total_harga'=> $total,

         
     ]);

     return redirect()->route('daftarMakanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keranjang = keranjang::all();
        $edit_keranjang = keranjang::where('id',$id)->first();

        return view('keranjang', compact('keranjang','edit_keranjang'))->with(['edit' => 'Pesan Warning']);;
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $total = $request->harga_makanan * $request->jumlah_makanan;
        keranjang::where('id',$id)->update([
            'jumlah_makanan' => request('jumlah_makanan'),
            'total_harga' => $total,
        ]);
        return redirect()->route('keranjang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        public function delete($id)
    {
        keranjang::where('id',$id)->delete();

        return back();
    }

}
