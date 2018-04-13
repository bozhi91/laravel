<?php

namespace app\Src\User;

use App\Repositories\User\UserRepository as UserRepository;
use App\Src\EntityClass;
use DB;
use Illuminate\Container\Container as App;

class User
{
    private $id;
    public $email;
    public $tel;
    public $name;

    public function __construct(Array $properties = array())
    {
        foreach ($properties as $key => $value) {
            $this->{$key} = $value;
        }
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    ////////////////////////////////////////////////////
    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    ////////////////////////////////////////////////////
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    ////////////////////////////////////////////////////

    public function toArray()
    {
        return get_object_vars($this);
    }
}