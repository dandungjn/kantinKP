<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftarMakanan;
use App\keranjang;
use App\transaksi;
use App\detailTransaksi;
use redirect; 

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }


    public function historitransaksiview(Request $request)
    {
        if($request->has('cari')){
            $transaksi = transaksi::where('id','LIKE','%'.$request->cari.'%')->get();
        }else{
        $transaksi = transaksi::all();    
        }
        return view('histori',compact('transaksi'));
    
    }

     public function laporanview(Request $request)
    {
        if($request->has('cari')){
            $detail_transaksi = detailTransaksi::where('created_at','LIKE','%'.$request->cari.'%')->get();
            $subtotal = $detail_transaksi->sum('total_harga');
        }else{
        $detail_transaksi = detailTransaksi::all();          
        $subtotal = $detail_transaksi->sum('total_harga');
        }
        return view('laporan',compact('detail_transaksi','subtotal'));
    
    }


    public function infokeranjang($id)
    {
        $info_transaksi = detailTransaksi::where('id_transaksi',$id)->get();

        return view('historiinfo',compact('info_transaksi'));
        
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
        //
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
