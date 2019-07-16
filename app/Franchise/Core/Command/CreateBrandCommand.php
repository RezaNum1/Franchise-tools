<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:20
 */

namespace App\Franchise\Core\Command;

use App\Franchise\Core\Query\BrandQuery;
use App\Franchise\Model\ModelBrand;

class CreateBrandCommand
{

    private $owner_id, $name, $address, $phone, $npwp;

    /**
     * Create a new command instance.
     *
     * @param $owner_id
     * @param $name
     * @param $address
     * @param $phone
     * @param $npwp
     */
    public function __construct($owner_id, $name, $address, $phone, $npwp)
    {
        $this->owner_id = $owner_id;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->npwp = $npwp;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     * @throws \Exception
     */
    public function handle()
    {
        try{
            $model = new ModelBrand();
            $model->setOwnerId($this->owner_id);
            $model->setName($this->name);
            $model->setAddress($this->address);
            $model->setPhone($this->phone);
            $model->setNpwp($this->npwp);

            $query = new BrandQuery();
            return $query->store($model);
        }
        catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    

}
