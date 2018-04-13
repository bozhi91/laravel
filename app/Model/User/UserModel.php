<?php

namespace App\Model\User;

use App\Model\BaseModel;
use Illuminate\Notifications\Notifiable;

class UserModel extends BaseModel{

    use Notifiable;
    public $timestamps = false;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'email', 'tel', 'name'];
    
}
