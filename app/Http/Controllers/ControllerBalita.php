<?php

namespace App\Http\Controllers;

use App\Models\ModelBalita;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class ControllerBalita extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        # code...
        $this->ModelBalita = new ModelBalita();
    }
    public function index()
    {
        //
        $data = [
            'balita' => $this->ModelBalita->allData()
        ];
        return view('/Admin/data_balita', $data);
    }

    public function index_update()
    {
        //
        $data = [
            'balita' => $this->ModelBalita->allData()
        ];
        return view('/Admin/update_data_balita', $data);
    }
    public function index_delete()
    {
        //
        $data = [
            'balita' => $this->ModelBalita->allData()
        ];
        return view('/Admin/delete_data_balita', $data);
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
          //masukan ke tabel data_balita
          DB::table('data_balita')->insert([
            'nm_balita' => $request->nm_balita,
            'nm_orangtua' => $request->nm_orangtua,
            'nohp_orangtua' => $request->nohp_orangtua,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'foto' => $request->foto
        ]);

        //alihkan ke halaman data_balita

        return redirect('/data_balita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function show(balita $balita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //mengambil data balita berdasarkan id yg dipilih
        $Balita = DB::table('data_balita')->where('id_balita', $id)->get();
        //passing data balita yang di dapat ke balita_edit.blade.php
        return view('/Admin/balita_edit',['balita'=> $Balita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::table('data_balita')->where('id_balita',$request->id)->update([
            'nm_balita' => $request->nm_balita,
            'nm_orangtua' => $request->nm_orangtua,
            'nohp_orangtua' => $request->nohp_orangtua,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'foto' => $request->foto
        ]);

        return redirect('/update_data_balita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //menhapus data balita berdasarkan id yang diipilh
        DB::table('data_balita')->where('id_balita', $id)->delete();

        //kembali ke halaman balita
        return redirect('/delete_data_balita');
    }

    
        public function join_jadwal(){
    
            //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
            //menggunakan ->join() untuk menggabungkan tabel lainnya
            //diakhir get() untuk mengambil data array
    
            //diakhir first() jika hanya satu data yang diambil
    
            $data = DB::table('tbl_jadwal')
                    ->join('data_balita', 'data_balita.id_balita', '=', 'tbl_jadwal.id_balita')
                    ->get();
    
            //tampilkan view barang dan kirim datanya ke view tersebut
            return view('jadwal_imunisasi')->with('data', $data);
        }

        public function join_jadwal_admin(){
    
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
}
