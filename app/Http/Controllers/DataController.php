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
           $data = DB::table('rak_buku')
                    ->join('buku','buku.id','=','rak_buku.id')
                    ->join('jenis_buku','jenis_buku.id','=','rak_buku.id')
           ->get();
            return view('data.data0247')->with('data',$data);
            //$p_pagi = buku::all();
           // return $p_pagi;

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
            'judul'         => 'required',
            'jenis'         => 'required',
            'tahun_terbit'  => 'required',
        ]);

        //selanjutnya insert ke database

        DB::table('buku')->insert([
            'judul'         => $request->judul,
            'tahun_terbit'  => $request->tahun_terbit,
            
        ]);
        DB::table('jenis_buku')->insert([
            'jenis'         => $request->jenis,
            
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
         $p_ganjil3 = DB::table('pelanggan')->where('id',$id)->first();
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
        
        DB::table('pelanggan')->where('id',$id)->update([
            'nama'  => $request->nama,
            'alamat'=> $request->alamat,
        ]);
                
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
        DB::table('pelanggan')->where('id',$id)->delete();
        return redirect('/data0247')->with('status','Data Berhasil Dihapus');
    }
    
}
