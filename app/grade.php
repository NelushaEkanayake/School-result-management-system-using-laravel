<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    public function subjects(){

        //return $this->hasMany(related: 'App/gradeSubject',foreignKey:'grade_id', localKey:'id');
          return $this->belongsToMany(subject::class);

    }
}
