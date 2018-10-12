<?php

namespace App\Containers\Transaction\Models;

use App\Ship\Parents\Models\Model;

class Transaction extends Model
{
    const STATUS_PENDING = 1;
    const STATUS_SUCCESS = 2;
    const STATUS_FAILED = 3;

    protected $fillable = [
        "card_id",
        "note",
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'transactions';
}
