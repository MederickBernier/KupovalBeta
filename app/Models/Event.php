<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'location',
        'date',
        'artist_id',
    ];
    public function artist(){
        return $this->belongsTo(User::class, 'artist_id');
    }
}
