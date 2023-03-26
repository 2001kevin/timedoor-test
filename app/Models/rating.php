<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;

    protected $table = 'ratings';
    protected $primaryKey = 'id';

    protected $fillable = [
        'author_id',
        'book_id'
    ];

    public function book(){
        return $this->belongsTo(book::class);
    }

    public function author(){
        return $this->hasMany(author::class);
    }
}
