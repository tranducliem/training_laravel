<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model {
    protected $fillable = ['title', 'content', 'author', 'category_id', 'created_at'];

    public function setCreatedAtAttribute($date){
        //Format lai du lieu cua create date dc gui vao tu form
        $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }
}
