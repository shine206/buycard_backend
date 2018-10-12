<?php

namespace App\Containers\Card\Models;

use App\Ship\Parents\Models\Model;

class Card extends Model
{
    protected $fillable = [

    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [
        "status" => "boolean"
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'cards';
}
