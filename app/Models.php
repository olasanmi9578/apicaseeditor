<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    //
    protected $table = "models";
    protected $fillable = ['id', 'name', 'brands_id'];

    public function brand () {
        return $this->belongsTo('App\Brands', 'id');
    }

    public function cases () {
        return $this->hasMany('App\CaseModel', 'models_id');
    }
}
