<?php

namespace App\Models;

use App\Models\ItemType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'price',
        'item_type_id'
    ];

    public function type(){
        //banyak item adalah milik satu tipe
        return $this->belongsTo(ItemType::class, 'item_type_id', 'id');
    }
}
