<?php

namespace App\Containers\User\Data\Repositories;

use App\Containers\Authentication\Exceptions\LoginFailedException;
use App\Containers\User\Models\User;
use App\Ship\Parents\Repositories\Repository;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserRepository.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UserRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name' => 'like',
        'id' => '=',
        'email' => '=',
        'confirmed' => '=',
        'created_at' => 'like',
    ];


    public function login($username, $password)
    {
        $user = User::where(function ($q) use ($username) {
            $q->where('username', $username)
                ->orWhere('email', $username);
        })->first();

        if ($user) {
            if (Hash::check($password, $user->password)) {
                return $user;
            }
        }

        throw new LoginFailedException();
    }
}
