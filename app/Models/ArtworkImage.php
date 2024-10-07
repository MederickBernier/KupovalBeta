<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtworkImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'artwork_id',
        'image_path',
        'is_main',
    ];

    public function artwork(){
        return $this->belongsTo(Artwork::class);
    }
}
