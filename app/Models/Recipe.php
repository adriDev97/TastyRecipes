<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'prep_time', 'cook_time', 'serving', 'ingredient1', 'ingredient2', 'ingredient3', 'ingredient4', 'ingredient5', 'ingredient6', 'ingredient7', 'ingredient8', 'ingredient9', 'ingredient10', 'ingredient11', 'ingredient12', 'ingredient13', 'ingredient14', 'ingredient15', 'ingredient16', 'ingredient17', 'ingredient18', 'ingredient19', 'ingredient20', 'preparation', 'tip', 'note', 'image', 'difficulty_id', 'category_id', 'user_id'];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function difficulty() {
        return $this->belongsTo('App\Models\Difficulty');
    }
    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }
    public function likes() {
        return $this->belongsToMany('App\Models\User');
    }
    // public function getHumanDateAttribute() {
    //     return Carbon::parse($this->created_at)->diffForHumans();
    // }
}
