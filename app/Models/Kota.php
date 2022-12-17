<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    public function products() {

        return $this->hasMany(Product::class, 'kota_id', 'id');
    }
}
