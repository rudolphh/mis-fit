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


    /**
     * Get the user that owns the measurement.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
