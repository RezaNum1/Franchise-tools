<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:16
 */

namespace App\Franchise\Core\Service;


use App\Franchise\Eloquent\EloquentUser;

class UserService
{
    public function getById($id){
        return EloquentUser::where('id', $id)->first();
    }

    public function getByType($type){
        return EloquentUser::where('type', $type)->get();
    }

    public function getByEmail($email){
        return EloquentUser::where('email', $email)->first();
    }

    public function getByUsername($username){
        return EloquentUser::where('username', $username)->first();
    }

    public function getByPassword($password){
        return EloquentUser::where('password', $password)->first();
    }
}
