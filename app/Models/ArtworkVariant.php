<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtworkVariant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'artwork_id',
        'product_type_id',
        'size',
        'price',
        'quantity'
    ];

    public function artwork(){
        return $this->belongsTo(Artwork::class);
    }

    public function productType(){
        return $this->belongsTo(ProductType::class);
    }
}
