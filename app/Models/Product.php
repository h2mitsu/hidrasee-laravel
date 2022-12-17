<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function kota(){
        return $this->belongsTo(Liga::class, 'liga_id', 'id');
    }
    public function depot(){
        return $this->belongsTo(Depot::class, 'depot_id', 'id');
    }
}
