<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseModel extends Model
{
    //
    protected $table = "case_models";
    protected $fillable = ['id', 'name', 'brands_id', 'path_preview', 'path_solid', 'path_overlight', 'models_id'];

    public function model () {
        return $this->belongsTo('App\Models', 'id');
    }
}
