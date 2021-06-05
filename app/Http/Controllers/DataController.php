<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $p_ganjil3 = DB::table('pelanggan')->get();
            return view('data.data0247', ['pelanggan' => $p_ganjil3]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.tambah0247');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //pertama cek validasi
        $this->validate($request,[
            'nama'      => 'required',
            'alamat'    => 'required',
        ]);

        //selanjutnya insert ke database
        DB::table('pelanggan')->insert([
            'nama'  => $request->nama,
            'alamat'=> $request->alamat,
            
        ]);

        //setelah berhasil insert di redirect
        return redirect('/data0247')->with('status','Data anggota Berhasil Ditambahkan');
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
	    
       // $soal1 = DB::table('anggota')->where('anggota_id',$id)->get();
	   // return view('data.edit0247',['anggota' => $soal1]);
         //mengambil data dari database
         $p_ganjil3 = DB::table('pelanggan')->where('id',$id)->first();
        
         //passing data ke view edit.blade.php
         return view('data.edit0247',compact('p_ganjil3'));
 
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
        //mengupdate data
        
        DB::table('pelanggan')->where('pelanggan',$id)->update([
            'nama'  => $request->nama,
            'alamat'=> $request->alamat,
        ]);
                
        //redirect setelah berhasil menjalankan update
        return redirect('/data0247')->with('status','Data Berhasil Diupdate');
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
