<?php

namespace App\Containers\Card\UI\API\Transformers;

use App\Containers\Card\Models\Card;
use App\Ship\Parents\Transformers\Transformer;

class CardTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Card $entity
     *
     * @return array
     */
    public function transform(Card $entity)
    {
        $response = [
            'id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'type' => $entity->type,
            'image' => $entity->image,
            'price' => $entity->price,
            'quantity' => $entity->quantity,
            'status' => $entity->status,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
