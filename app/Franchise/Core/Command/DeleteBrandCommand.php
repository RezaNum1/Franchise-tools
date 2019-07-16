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

class DeleteBrandCommand
{
    private $id, $query, $repository;

    /**
     * Create a new command instance.
     *
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
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

            $brand = $this->repository->getById($this->id);

            $model = new ModelBrand();
            $model->setId($this->id);

            return $this->query->delete($model);
        }
        catch(\Exception $e) {
            throw new \Exception($e->getMessage());
        }
        
    }
}