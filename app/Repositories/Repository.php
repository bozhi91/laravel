<?php

namespace app\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;
use App\Repositories\RepositoryInterface as RepositoryInterface;

abstract class Repository implements RepositoryInterface
{
    private $app;
    private $model;

    public function __construct(App $app){
        $this->app = $app;
        $this->makeModel();
    }

    abstract function model();

    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model)
            throw new RepositoryException("Class {$this->model()} must be an instance");

        return $this->model = $model;
    }
}