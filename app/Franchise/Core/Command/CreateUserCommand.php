<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:20
 */

namespace App\Franchise\Core\Command;

use App\Franchise\Core\Query\UserQuery;
use App\Franchise\Model\ModelUser;

class CreateUserCommand
{

    private $name, $username, $email, $password, $type;

    /**
     * Create a new command instance.
     *
     * @param $name
     * @param $username
     * @param $email
     * @param $password
     * @param $type
     */
    public function __construct($name, $username, $email, $password, $type, $remember_token)
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->type = $type;
        $this->remember_token = $remember_token;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $model = new ModelUser();
        $model->setName($this->name);
        $model->setEmail($this->email);
        $model->setUsername($this->username);
        $model->setPassword(bcrypt($this->password));
        $model->setType($this->type);
        $model->setToken(md5($this->username));


        $query = new UserQuery();
        return $query->store($model);
    }
}
