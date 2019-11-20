<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    public function rules()
    {
        return $this->belongsTo('App\Rule');
    }
}
