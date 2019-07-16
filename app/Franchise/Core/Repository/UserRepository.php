<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:16
 */

namespace App\Franchise\Core\Repository;


use App\Franchise\Core\Service\UserService;

class UserRepository
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function getById($id){
        $user = $this->userService->getById($id);

        if(!$user){
            throw new \Exception('User not found!');
        }

        return $user;
    }

    public function getByType($type){
        return $this->userService->getByType($type);
    }

    public function getByEmail($email){
        $user = $this->userService->getByEmail($email);

        if(!$user){
            throw new \Exception('User not found!');
        }

        return $user;
    }

    public function getByUsername($username){
        $user = $this->userService->getByUsername($username);

        if($user){
            return $user;
        }
    }

    public function getByPassword($password){
        $user = $this->userService->getByPassword($password);

        if($user){
            return $user;
        }

        
    }

}
