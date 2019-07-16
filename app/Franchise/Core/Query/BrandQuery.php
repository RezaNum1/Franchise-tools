<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:16
 */

namespace App\Franchise\Core\Query;


use App\Franchise\Eloquent\EloquentBrand;
use App\Franchise\Model\ModelBrand; 
use Illuminate\Http\Request;

class BrandQuery
{
    public function store(ModelBrand $modelBrand){
        $data = new EloquentBrand();
        $data->owner_id = $modelBrand->getOwnerId();
        $data->name = $modelBrand->getName();
        $data->address = $modelBrand->getAddress();
        $data->phone = $modelBrand->getPhone();
        $data->npwp = $modelBrand->getNpwp();
        $data->save();

        return $data;
    }   

    
    public function update(ModelBrand $modelBrand){
        $data = EloquentBrand::where('id', $modelBrand->getId())->first();
        $data->owner_id = $modelBrand->getOwnerId();
        $data->name = $modelBrand->getName();
        $data->address = $modelBrand->getAddress();
        $data->phone = $modelBrand->getPhone();
        $data->npwp = $modelBrand->getNpwp();
        $data->save();

        return $data;

    }

    public function delete(ModelBrand $modelBrand){
        $data = EloquentBrand::where('id', $modelBrand->getId())->first();

        if($data->status == 1){
            $data->status = 0;
        }
        else{
            $data->status = 1;
        }

        $data->save();
        return $data;
    }


}
