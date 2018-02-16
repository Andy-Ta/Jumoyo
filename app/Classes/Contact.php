<?php
/**
 * Created by IntelliJ IDEA.
 * User: karine
 * Date: 2017-12-26
 * Time: 12:35 AM

 */

namespace App\Classes;


class Contact
{
    private $name;
    private $address;
    private $phoneNumber;
    private $email;

    function _construct($data){
        $this->setAll($data);
    }

    public function setAll($data){
        if(isset($data->name)){
            $this->name = $data->name;
        }
        if(isset($data->address)){
            $this->address = $data->address;
        }
        if(isset($data->phoneNumber)){
            $this->phoneNumber = $data->phoneNumber;
        }
        if(Isset($data->email)){
            $this->email = $data->email;
        }
    }

    public function getAll(){
        $returnData = new \stdClass();

        $returnData->name = $this->name;
        $returnData->address = $this->address;
        $returnData->phoneNumber = $this->phoneNumber;
        $returnData->email = $this->email;

        return $returnData;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}