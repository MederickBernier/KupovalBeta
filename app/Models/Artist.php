<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'alias',
        'bio',
        'profile_picture',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function artworks(){
        return $this->hasMany(Artwork::class);
    }
}
