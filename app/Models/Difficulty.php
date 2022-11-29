<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
    use HasFactory;

    protected $fillable = ['difficulty'];

    public function recipes() {
        return $this->hasMany('App\Models\Recipe');
    }
}
