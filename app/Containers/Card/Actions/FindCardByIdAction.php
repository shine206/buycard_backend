<?php

namespace App\Containers\Card\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCardByIdAction extends Action
{
    public function run(Request $request)
    {
        $card = Apiato::call('Card@FindCardByIdTask', [$request->id]);

        return $card;
    }
}
