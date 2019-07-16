<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:16
 */

namespace App\Franchise\Core\Query;


use App\Franchise\Eloquent\EloquentUser;
use App\Franchise\Model\ModelUser; 

class UserQuery
{
    public function store(ModelUser $modelUser){
        $data = new EloquentUser();
        $data->name = $modelUser->getName();
        $data->email = $modelUser->getEmail();
        $data->username = $modelUser->getUsername();
        $data->password = $modelUser->getPassword();
        $data->type = $modelUser->getType();
        $data->email_verified_at = null;
        $data->remember_token = $modelUser->getToken();
        $data->save();

        return $data;
    }
}
