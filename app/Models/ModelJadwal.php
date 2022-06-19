<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Support\Facades\DB;

class ModelJadwal extends Model
{
    use HasFactory;

    public function allData()
    {
        # code...
        return DB::table('tbl_jadwal')->get();
    }

    
}
