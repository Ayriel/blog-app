<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories"; //Indicando a que tabla o migración apunta.

    protected $fillable = ['name']; //esto indica que campos queremos que traiga de la DB.


    public function articles(){

        return $this->hasMany('App\Article');
    }
// SCOPE
    public function scopeSearchCategory($query, $name){
        return $query->where('name', '=', $name);
    }
}
