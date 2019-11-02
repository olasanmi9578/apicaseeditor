<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    //
    protected $table = "brands";
    protected $fillable = ['id', 'name'];

    public function model () {
        return $this->hasMany('App\Models', 'brands_id');
    }
}
