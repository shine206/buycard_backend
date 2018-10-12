<?php

namespace App\Containers\Card\UI\API\Controllers;

use App\Containers\Card\UI\API\Requests\CreateCardRequest;
use App\Containers\Card\UI\API\Requests\DeleteCardRequest;
use App\Containers\Card\UI\API\Requests\GetAllCardsRequest;
use App\Containers\Card\UI\API\Requests\FindCardByIdRequest;
use App\Containers\Card\UI\API\Requests\UpdateCardRequest;
use App\Containers\Card\UI\API\Transformers\CardTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Card\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateCardRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCard(CreateCardRequest $request)
    {
        $card = Apiato::call('Card@CreateCardAction', [$request]);

        return $this->created($this->transform($card, CardTransformer::class));
    }

    /**
     * @param FindCardByIdRequest $request
     * @return array
     */
    public function findCardById(FindCardByIdRequest $request)
    {
        $card = Apiato::call('Card@FindCardByIdAction', [$request]);

        return $this->transform($card, CardTransformer::class);
    }

    /**
     * @param GetAllCardsRequest $request
     * @return array
     */
    public function getAllCards(GetAllCardsRequest $request)
    {
        $cards = Apiato::call('Card@GetAllCardsAction', [$request]);

        return $this->transform($cards, CardTransformer::class);
    }

    /**
     * @param UpdateCardRequest $request
     * @return array
     */
    public function updateCard(UpdateCardRequest $request)
    {
        $card = Apiato::call('Card@UpdateCardAction', [$request]);

        return $this->transform($card, CardTransformer::class);
    }

    /**
     * @param DeleteCardRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCard(DeleteCardRequest $request)
    {
        Apiato::call('Card@DeleteCardAction', [$request]);

        return $this->noContent();
    }
}
