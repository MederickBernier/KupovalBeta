<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArtworkImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'artwork_id',
        'image_path',
        'is_main',
    ];

    protected $dates = ['deleted_at'];

    public function artwork(){
        return $this->belongsTo(Artwork::class);
    }
}
