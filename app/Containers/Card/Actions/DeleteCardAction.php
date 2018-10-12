<?php

namespace App\Containers\Card\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCardAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Card@DeleteCardTask', [$request->id]);
    }
}
