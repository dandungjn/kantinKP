<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\daftarMakanan;
use redirect;


class daftarMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $daftar_makanan = daftarMakanan::where('nama_makanan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $daftar_makanan = daftarMakanan::all();
        
        }
        return view('daftarMakanan',compact('daftar_makanan'));
    
    }

    public function addmakanan(Request $request)
    {

        if($request->has('cari')){
            $daftar_makanan = daftarMakanan::where('nama_makanan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $daftar_makanan = daftarMakanan::all();
        
        }
        return view('addMakanan',compact('daftar_makanan'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $photo = $request->file('gambar_makanan');
        if(empty($photo)){
            $photoName = "";
        }else{
            $photoName = time()."_".$photo->getClientOriginalName();
            $request->file('gambar_makanan')->move("gallery/makanan", $photoName);
        }

         daftarMakanan::create([
            'nama_makanan' => request('nama_makanan'),
            'harga_makanan'=> request('harga_makanan'),
            'gambar_makanan' => $photoName,
            'stok_makanan'=> request('stok_makanan'),
            'nama_supplier'=> request('nama_supplier'),
         
     ]);

     return redirect()->route('daftarMakanan.add');
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
        $daftar_makanan = daftarMakanan::all();
        $edit_makanan = daftarMakanan::where('id',$id)->first();

        return view('addMakanan', compact('daftar_makanan','edit_makanan'))->with(['edit' => 'Pesan Warning']);;
 
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

        $photo = $request->file('gambar_makanan');
        if(empty($photo)){
        
        daftarMakanan::where('id',$id)->update([
            'nama_makanan' => request('nama_makanan'),
            'harga_makanan' => request('harga_makanan'),
            'stok_makanan' => request('stok_makanan'),
            'nama_supplier'=> request('nama_supplier'),
        ]);

        }else{
            $photoName = time()."_".$photo->getClientOriginalName();
            $request->file('gambar_makanan')->move("gallery/makanan", $photoName);
            
            daftarMakanan::where('id',$id)->update([
            'nama_makanan' => request('nama_makanan'),
            'harga_makanan' => request('harga_makanan'),
            'stok_makanan' => request('stok_makanan'),
            'nama_supplier'=> request('nama_supplier'),
            'gambar_makanan' =>$photoName,
        ]);

        }
return redirect('addmenu');
        
        
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
        daftarMakanan::where('id',$id)->delete();

        return back();
    }


}
