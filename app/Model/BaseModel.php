<?php

namespace app\Model;

use App\Model\User\UserModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

abstract class BaseModel extends Model
{
    /**
     * Boot function for using with User Events
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->createTable();
        });

        static::updating(function ($model) {
            $model->updateTable();
        });

        static::deleting(function ($model) {
            $model->deleteTable($model);
        });
    }

    protected function createTable()
    {
        $user = Auth::user();
        if (empty($user)) {
            $now_user = 'admin';
        } else {
            $now_user = $user->getAttributes()['email'];
        }
        if (empty($now_user)) {
            $now_user = 'admin';
        }
    }

    protected function updateTable()
    {
        $user = Auth::user();
        if (empty($user)) {
            $now_user = 'admin';
        } else {
            $now_user = $user->getAttributes()['email'];
        }

        if (empty($now_user)) {
            $now_user = 'admin';
        }
    }

    protected function deleteTable($model)
    {
        $user = Auth::user();
        if (empty($user)) {
            $now_user = 'admin';
        } else {
            $now_user = $user->getAttributes()['email'];
        }
        if (empty($now_user)) {
            $now_user = 'admin';
        }
        $model->save();
    }

}