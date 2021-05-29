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
            $soal1 = DB::table('anggota')->get();
            return view('data.data0247', ['anggota' => $soal1]);

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
	    // mengambil data pegawai berdasarkan id yang dipilih
        $soal1 = DB::table('anggota')->where('anggota_id',$id)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('data.edit0247',['anggota' => $soal1]);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('anggota')->where('anggota_id',$request->id)->update([
            'anggota_nama' => $request->nama,
            'anggota_alamat' => $request->alamat,
            'anggota_jk' => $request->jk,
            'anggota_telp' => $request->telp
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('data0247');
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
