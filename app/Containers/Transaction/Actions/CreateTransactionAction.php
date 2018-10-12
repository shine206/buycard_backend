<?php

namespace App\Containers\Transaction\Actions;

use App\Containers\Transaction\Models\Transaction;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Support\Facades\Auth;

class CreateTransactionAction extends Action
{
    public function run(DataTransporter $request)
    {
        $data = $request->sanitizeInput([
            "card_id",
            "note"
        ]);

        $data = array_filter($data);

        $data["user_id"] = Auth::id();
        $data["status"] = Transaction::STATUS_FAILED;

        $transaction = Apiato::call('Transaction@CreateTransactionTask', [$data]);

        return $transaction;
    }
}