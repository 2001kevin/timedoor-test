<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cattegory extends Model
{
    use HasFactory;

    protected $table = 'cattegories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    public function book(){
        return $this->hasMany(book::class);
    }
}
