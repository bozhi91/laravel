<?php

namespace app\Repositories\User;

use app\Repositories\RepositoryInterface;
use app\Src\User\User;

interface UserInterface extends RepositoryInterface{
    public function selectAll();
    public function find($id);
    public function create(User $user);
    public function update(User $user);
}