<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    //

    protected $casts = ['id' => 'string'];

    protected $dates = ['date', 'created_at'];


    public $incrementing = false;
    public function getFormattedDateAttribute()
{
    return $this->created_at->format('d-m-Y');
}

protected $appends = ['formattedDate'];

    
}
