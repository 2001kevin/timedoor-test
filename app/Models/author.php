<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;

    protected $table = 'authors';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];

    public function rating(){
        return $this->belongsTo(rating::class);
    }

    public function book(){
        return $this->hasMany(book::class);
    }
}
