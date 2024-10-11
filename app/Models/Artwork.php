<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ArtworkImage;
use App\Models\User;

class Artwork extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'artist_id',
        'title',
        'description',
        'image_path',
    ];

    protected $dates = ['deleted_at'];

    public function artist(){
        return $this->belongsTo(User::class, 'artist_id');
    }

    public function images(){
        return $this->hasMany(ArtworkImage::class);
    }
}
