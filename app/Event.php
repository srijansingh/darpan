<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table="events";
    protected $guarded=array();
    protected $fillable=[
        'id','name','description','image','venue','time','regFee','starting_at','ending_at','status',
    ];

}
