<?php

namespace app\Repositories;

interface RepositoryInterface
{
    public function find($id);
    public function delete($id);
}