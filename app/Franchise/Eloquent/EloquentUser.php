<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:10
 */

namespace App\Franchise\Eloquent;

use App\Franchise\Eloquent\EloquentBrand;
use Illuminate\Database\Eloquent\Model;

class EloquentUser extends Model
{
    protected $table = 'users';

    protected $fillable = ['id', 'name', 'email', 'username', 'password', 'type', 'remember_token'];
    
    public function brand()
    {
        return $this->hasMany('App\Franchise\Eloquent\EloquentBrand', 'owner_id');
    }
}
