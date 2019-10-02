<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table="guests";
    protected $fillable=[
        'id','name','email','regID','contact','fname','mname','college','image','eventID','address',
    ];


    public function event(){
        return $this->belongsTo('App\Event');
    }
}
