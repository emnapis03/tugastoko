<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table='kategori_produk';
    protected $guarded=['id'];


    public function produk()
    {
        return $this->belongsTo(produk::class);
    }
}
