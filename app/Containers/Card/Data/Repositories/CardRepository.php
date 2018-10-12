<?php

namespace App\Containers\Card\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CardRepository
 */
class CardRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
