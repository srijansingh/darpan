<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    protected $table="links";
    protected $fillable=[
        'id','facebook','instagram','linkedin','twitter',
    ];
}
