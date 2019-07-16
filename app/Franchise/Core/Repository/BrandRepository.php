<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:16
 */

namespace App\Franchise\Core\Repository;


use App\Franchise\Core\Service\BrandService;

class BrandRepository
{
    private $brandService;

    public function __construct()
    {
        $this->brandService = new BrandService();
    }

    public function getByOwnerId($owner_id, $q, $orderBy){
        $brand = $this->brandService->getByOwnerId($owner_id, $q, $orderBy);

        if(!$brand){
            return [];
        }

        return $brand;
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     */
    public function getById($id){
        $brand = $this->brandService->getById($id);

        if(!$brand){
            throw new \Exception('Brand Not Found!');
        }

        return $brand;
    }

}
