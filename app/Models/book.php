<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'cattegory_id',
        'author_id',
    ];

    public function cattegory(){
        return $this->belongsTo(cattegory::class, 'cattegory_id');
    }

    public function author(){
        return $this->belongsTo(author::class);
    }
    public function rating(){
        return $this->hasMany(rating::class);
    }
}
