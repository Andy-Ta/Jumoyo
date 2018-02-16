<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2017-12-20
 * Time: 8:49 PM
 */

namespace App\Classes;


class Client
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $mobile;
    private $address;
    private $city;
    private $postalCode;
    private $country;
    private $state;
    private $business; // business object

    function __construct($data)
    {
        $this->setAll($data);
    }

    public function setAll($data)
    {
        if (isset($data->id)) {
            $this->id = $data->id;
        }
        if (isset($data->firstName)) {
            $this->firstName = $data->firstName;
        }
        if (isset($data->lastName)) {
            $this->lastName = $data->lastName;
        }
        if (isset($data->email)) {
            $this->email = $data->email;
        }
        if (isset($data->password)) {
            $this->password = $data->password;
        }
        if (isset($data->mobile)) {
            $this->mobile = $data->mobile;
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
        if (isset($data->business)) {
            $this->business = $data->business;
        }
    }

    public function getAll()
    {
        $returnData = new \stdClass();

        $returnData->id = $this->id;
        $returnData->firstName = $this->firstName;
        $returnData->lastName = $this->lastName;
        $returnData->email = $this->email;
        $returnData->password = $this->password;
        $returnData->mobile = $this->mobile;
        $returnData->address = $this->address;
        $returnData->city = $this->city;
        $returnData->postalCode = $this->postalCode;
        $returnData->country = $this->country;
        $returnData->state = $this->state;
        $returnData->business = $this->business;

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

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
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

    public function getBusiness()
    {
        return $this->business;
    }

    public function setBusiness($business)
    {
        $this->business = $business;
    }

}