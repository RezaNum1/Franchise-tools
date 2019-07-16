<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:10
 */

namespace App\Franchise\Eloquent;

use App\Franchise\Eloquent\EloquentUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EloquentBrand extends Model
{
    //use SoftDeletes;

    protected $table = 'brands';

    protected $fillable = ['id','owner_id', 'name', 'address', 'phone', 'npwp' ];

    public function user()
    {
        return $this->belongsTo('App\Franchise\Eloquent\EloquentUser', 'id');
    }
}
