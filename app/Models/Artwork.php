<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artwork extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'artist_id',
        'title',
        'description',
        'image_path',
        'category_id',
    ];

    protected $dates = ['deleted_at'];

    public function artist(){
        return $this->belongsTo(User::class, 'artist_id');
    }

    public function images(){
        return $this->hasMany(ArtworkImage::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    
    public function variants(){
        return $this->hasMany(ArtworkVariant::class);
    }
}
