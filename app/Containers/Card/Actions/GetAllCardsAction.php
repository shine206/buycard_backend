<?php

namespace App\Containers\Card\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllCardsAction extends Action
{
    public function run(Request $request)
    {
        $cards = Apiato::call('Card@GetAllCardsTask', [], ['addRequestCriteria']);

        return $cards;
    }
}
