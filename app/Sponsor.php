<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    //
    protected $table="sponsors";

    protected $fillable=[
        'id','name','image','status',
    ];
}
