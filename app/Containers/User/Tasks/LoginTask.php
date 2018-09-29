<?php

namespace App\Containers\User\Tasks;

use App\Containers\Authentication\Exceptions\LoginFailedException;
use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\InternalErrorException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Class UpdateUserTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class LoginTask extends Task
{

    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $userData
     * @param $userId
     *
     * @return mixed
     * @throws InternalErrorException
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     *
     * @return  \App\Containers\User\Models\User
     */
    public function run($username, $password): User
    {

        try {
            $user = $this->repository->login($username, $password);
        } catch (Exception $exception) {
            throw new LoginFailedException();
        }

        return $user;
    }

}
