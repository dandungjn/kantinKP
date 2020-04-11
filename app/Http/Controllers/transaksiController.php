<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftarMakanan;
use App\keranjang;
use App\transaksi;
use App\detailTransaksi;
use redirect; 

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function terimakasih()
    {
        return view('terimakasih');
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

        $transaksi = transaksi::create([
            'total_harga' => request('total_harga'),
            'dibayar' => request('dibayar'),
            'kembalian'=> request('kembalian'),    
     ]);
         $keranjang = keranjang::all();

         foreach($keranjang as $data){
            detailTransaksi::create([
                'id_transaksi' =>$transaksi->id,
                'nama_makanan' => $data->nama_makanan,
                'jumlah_makanan'=>$data->jumlah_makanan,
                'harga_makanan'=>$data->harga_makanan,
                'total_harga'=>$data->total_harga,
            ]);
        
    $daftar_makanan = daftarMakanan::where('id',$data->id_makanan);
        foreach($keranjang as $data2){
            $updatestok =  $data2->stok_makanan - $data2->jumlah_makanan;
          $daftar_makanan->update([
                'stok_makanan'=>$updatestok,
            ]);
        }         


         }


        

        keranjang::query()->truncate();



     return redirect()->route('terimakasih.index');


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
        //
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
        //
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
}
