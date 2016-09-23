<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    //
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'weight', 'neck', 'waist', 'hip'
    ];



}
