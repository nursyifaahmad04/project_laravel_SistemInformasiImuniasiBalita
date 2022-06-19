<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'nm_balita',
    ];

    public function user()
    {

        return $this->hasMany('App\Models\Position');
    }
}