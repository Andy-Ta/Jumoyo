<?php
/**
 * Created by IntelliJ IDEA.
 * User: karine
 * Date: 2017-12-26
 * Time: 2:23 AM
 */

namespace App\Classes;


class Image
{
    private $id;
    private $name;

    function _construct($data){
        $this->setAll($data);
    }

    public function setAll($data){
        if(isset($data->id)){
            $this->id = $data->id;
        }

        if(isset($data->name)){
            $this->name = $data->name;
        }
    }

    public function getAll(){

        $returnData = new \stdClass();

        $returnData->id = $this->id;
        $returnData->name = $this->name;

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
    
    
}