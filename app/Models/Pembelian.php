<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembelian extends Model
{
  

    use HasFactory, SoftDeletes;
    
    protected $table = 'pembelian';
    protected $primaryKey = 'id_pembelian';
    protected $guarded = [];

    
   
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id_supplier');
    }
}
