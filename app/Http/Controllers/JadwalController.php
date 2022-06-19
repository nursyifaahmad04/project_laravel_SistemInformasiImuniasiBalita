<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ModelBalita;
use App\Models\Position;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
            //menggunakan ->join() untuk menggabungkan tabel lainnya
            //diakhir get() untuk mengambil data array
    
            //diakhir first() jika hanya satu data yang diambil
    
            $data = DB::table('tbl_jadwal')
                    ->join('data_balita', 'data_balita.id_balita', '=', 'tbl_jadwal.id_balita')
                    ->get();
            
                    
    
            //tampilkan view barang dan kirim datanya ke view tersebut
            return view('Admin/jadwal_imunisasi')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //mengambil data balita berdasarkan id yg dipilih
        $Balita = DB::table('tbl_jadwal')->get();
        $Balita = DB::table('data_balita')->get();
        //passing data balita yang di dapat ke balita_edit.blade.php
        return view('/Admin/create_data_jadwal',['balita'=> $Balita]);
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
        //masukan ke tabel data_balita
        DB::table('tbl_jadwal')->insert([
            'id_balita' => $request->id_balita,
            'nm_orangtua' => $request->nm_orangtua,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'tahun' => $request->tahun
        ]);

        //alihkan ke halaman data_balita

        return redirect('/jadwal_imunisasi_admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JadwalModel  $jadwalModel
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalModel $jadwalModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalModel  $jadwalModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         //mengambil data balita berdasarkan id yg dipilih
         $Balita = DB::table('tbl_jadwal')->where('id_jadwal', $id)->get();
         //passing data balita yang di dapat ke balita_edit.blade.php
         return view('/Admin/jadwal_edit',['balita'=> $Balita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalModel  $jadwalModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::table('tbl_jadwal')->where('id_jadwal',$request->id)->update([
            'id_balita' => $request->id_balita,
            'nm_orangtua' => $request->nm_orangtua,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'tahun' => $request->tahun
        ]);

        return redirect('/jadwal_imunisasi_admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalModel  $jadwalModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         //menhapus data jadwal berdasarkan id yang diipilh
         DB::table('tbl_jadwal')->where('id_jadwal', $id)->delete();

         //kembali ke halaman jadwal
         return redirect('/jadwal_imunisasi_admin');
    }
}
