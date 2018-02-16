<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2017-12-20
 * Time: 9:08 PM
 */

namespace App\Classes;


class Business
{
    private $id;
    private $name;
    private $address;
    private $city;
    private $postalCode;
    private $country;
    private $state;
    private $services; // list of services
    private $contacts; // list of contacts

    function __construct($data)
    {
        $this->setAll($data);
    }

    public function setAll($data)
    {
        if (isset($data->id)) {
            $this->id = $data->id;
        }
        if (isset($data->name)) {
            $this->name = $data->name;
        }
        if (isset($data->address)) {
            $this->address = $data->address;
        }
        if (isset($data->city)) {
            $this->city = $data->city;
        }
        if (isset($data->postalCode)) {
            $this->postalCode = $data->postalCode;
        }
        if (isset($data->country)) {
            $this->country = $data->country;
        }
        if (isset($data->state)) {
            $this->state = $data->state;
        }
        if (isset($data->state)) {
            $this->state = $data->state;
        }
        if (isset($data->services)) {
            $this->services = $data->servicese;
        }
        if (isset($data->contacts)) {
            $this->contacts = $data->contacts;
        }
    }

    public function getAll()
    {
        $returnData = new \stdClass();

        $returnData->id = $this->id;
        $returnData->name = $this->name;
        $returnData->address = $this->address;
        $returnData->city = $this->city;
        $returnData->postalCode = $this->postalCode;
        $returnData->country = $this->country;
        $returnData->state = $this->state;
        $returnData->services = $this->services;
        $returnData->contacts = $this->contacts;

        return $returnData;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getServices()
    {
        return $this->services;
    }

    public function setServices($services)
    {
        $this->services = $services;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
    }

}