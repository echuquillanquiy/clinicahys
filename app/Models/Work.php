<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];
    protected $withCount = ['applicants'];

    const BORRADOR = 1;
    const PUBLICADO = 2;

    //RELACION UNO A MUCHOS
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function place(){
        return $this->belongsTo(Place::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    //RELACION UNO A MUCHOS INVERSA
    public function requirements(){
        return $this->hasMany(Requirement::class);
    }

    public function interviewer(){
        return $this->belongsTo(User::class, 'user_id');
    }

    //RELACION UNO A MUCHOS POLIMORFICA

    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //RELACION MUCHOS A MUCHOS

    public function applicants(){
        return $this->belongsToMany(User::class);
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function scopeCategory($query, $category_id){
        if ($category_id){
            return $query->where('category_id', $category_id);
        }
    }

    public function scopeType($query, $type_id){
        if ($type_id){
            return $query->where('type_id', $type_id);
        }
    }

    public function scopePlace($query, $place_id){
        if ($place_id){
            return $query->where('place_id', $place_id);
        }
    }
}
