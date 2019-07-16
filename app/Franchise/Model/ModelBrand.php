<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 25/03/19
 * Time: 15:14
 */

namespace App\Franchise\Model;


class ModelBrand
{
    private  $id, $owner_id, $name, $address, $phone, $npwp;


    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $owner_id
     */
    public function setOwnerId($owner_id): void
    {
        $this->owner_id = $owner_id;
    }

    /**
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $npwp
     */
    public function setNpwp($npwp): void
    {
        $this->npwp = $npwp;
    }

    /**
     * @return mixed
     */
    public function getNpwp()
    {
        return $this->npwp;
    }

}
