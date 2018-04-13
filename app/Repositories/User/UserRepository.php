<?php

namespace App\Repositories\User;

use App\Model\User\UserModel;
use App\Repositories\Repository;
use App\Repositories\User\UserInterface as UserInterface;
use App\Src\User\User as User;
use DB;
use Illuminate\Support\Facades\Log;

class UserRepository extends Repository implements UserInterface
{

    //Here we're applying the basic CRUD operations

    public function model()
    {
        return 'App\Model\User\UserModel';
    }

    public function getUserByEmail($email){
        $personAux = UserModel::where('email', $email)->first();
        if (empty($personAux)) {
            return null;
        } else {
            return new User($personAux->attributesToArray());
        }
    }

    public function selectAll()
    {
        $usersCollection = UserModel::all();
        $final = $usersCollection->map(function ($userMapper) {
            $user = new User($userMapper->attributesToArray());
            return $user;
        });
        return $final;
    }

    public function find($id)
    {
        $array = UserModel::find($id);
        if (empty($array)) {
            return null;
        } else {
            return new User($array->attributesToArray());
        }
    }

    public function create(User $user)
    {
        $array = $user->toArray();
        $user = UserModel::create($array);
        return new User($user->attributesToArray());
    }

    public function update(User $user)
    {
        $array = $user->toArray();
        return UserModel::where('id', $user->getId())->first()->update($array);
    }

    public function delete($id)
    {
        return UserModel::find($id)->delete();
    }
}
