<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Lokasi;

class TransaksiProduksi extends Model
{
    use HasFactory;

    
    protected $table = 'transaksi_produksi';

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'kode_lokasi');
    }
}
