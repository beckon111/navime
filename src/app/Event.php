<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $fillable = [
        'longirude',
        'atitude',
        'description'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
