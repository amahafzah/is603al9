<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * Typecasting is awesome and it prevents errors.
     *
     * @var array
     */
    protected $casts = [
        'Make'     => 'string',
        'Model'    => 'string',
        'Year'     => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}

