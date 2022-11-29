<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'recipe_id', 'user_id'];

    public function recipes() 
    {
        return $this->belongsTo('App\Models\Recipe');
    }
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
    public function likes() 
    {
        return $this->belongsToMany('App\Models\User');
    }
}
