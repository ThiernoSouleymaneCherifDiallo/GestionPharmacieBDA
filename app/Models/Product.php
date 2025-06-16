<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory; // permet d'utiliser les méthodes de la classe HasFactory
    use SoftDeletes; // permet de supprimer les enregistrements sans les supprimer de la base de données
    protected $fillable = [
        'purchase_id',
        'price',
        'discount',
        'description',
    ];

    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }
}
