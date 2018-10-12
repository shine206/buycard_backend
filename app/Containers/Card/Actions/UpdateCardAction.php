<?php

namespace App\Containers\Card\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCardAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $card = Apiato::call('Card@UpdateCardTask', [$request->id, $data]);

        return $card;
    }
}
