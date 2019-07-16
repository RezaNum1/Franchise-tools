<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:16
 */

namespace App\Franchise\Core\Service;


use App\Franchise\Eloquent\EloquentBrand;

class BrandService
{
    public function getByOwnerId($owner_id, $q, $order){
        $data = EloquentBrand::where('owner_id', $owner_id)->orderBy('name', $order);

        if($q){
            $data->where('name', 'like', "%$q%");
        }

        return $data->get();
    }

    public function getById($id){
        return EloquentBrand::where('id', $id)->first();
    }
}
