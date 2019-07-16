<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:20
 */

namespace App\Franchise\Core\Command;

use App\Franchise\Core\Query\BrandQuery;
use App\Franchise\Core\Repository\BrandRepository;
use App\Franchise\Model\ModelBrand;

class UpdateBrandCommand
{
    private $brand_id, $name, $address, $phone, $npwp, $query, $repository;

    /**
     * Create a new command instance.
     *
     * @param $brand_id
     * @param $name
     * @param $address
     * @param $phone
     * @param $npwp
     */
    public function __construct($brand_id, $name, $address, $phone, $npwp)
    {
        $this->brand_id = $brand_id;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->npwp = $npwp;
        $this->query = new BrandQuery();
        $this->repository = new BrandRepository();
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function handle()
    {
        try{

            $brand = $this->repository->getById($this->brand_id);

            $model = new ModelBrand();
            $model->setId($this->brand_id);
            $model->setOwnerId($brand->owner_id);
            $model->setName($this->name);
            $model->setAddress($this->address);
            $model->setPhone($this->phone);
            $model->setNpwp($this->npwp);

            return $this->query->update($model);
        }
        catch(\Exception $e) {
            throw new \Exception($e->getMessage());
        }
        
    }
}