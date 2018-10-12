<?php

namespace App\Containers\Card\Tasks;

use App\Containers\Card\Data\Repositories\CardRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCardsTask extends Task
{

    protected $repository;

    public function __construct(CardRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->all();
    }
}
