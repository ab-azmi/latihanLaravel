<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    public function items(){
        //satu tipe dapat memiliki banyak items
        return $this->hasMany(Item::class);
    }

}
