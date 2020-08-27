<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Article extends Model
{

    use Sluggable;
    use SluggableScopeHelpers; //para poder utilizar el findBySlugOrFail en el controlador FrontController

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    protected $table = "articles";

    protected $fillable = ['title', 'content', 'user_id', 'category_id'];

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function images(){

        return $this->hasMany('App\image');
    }

    public function tags(){

        return $this->belongsToMany('App\Tag');
    }

        // Configuración de scope para el article title
        public function scopeSearch($query, $title)
    {
        return $query->where('title', 'LIKE', "%$title%");
    }


}
