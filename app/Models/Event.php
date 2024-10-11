<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Event extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'location',
        'date',
        'artist_id',
    ];

    protected $dates = ['deleted_at'];

    public function artist(){
        return $this->belongsTo(User::class, 'artist_id');
    }
}
