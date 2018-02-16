<?php
/**
 * Created by IntelliJ IDEA.
 * User: karine
 * Date: 2017-12-26
 * Time: 2:20 AM
 */

namespace App\Classes;


class Portfolio
{
    private $images;// list of images

    function _construct($data){
        $this->setAll($data);
    }

    public function setAll($data){
        if(isset($data->images)){
            $this->images = $data->images;
        }
    }

    public function getAll(){
        $returnData = new \stdClass();

        $returnData->images = $this->images;
        return $returnData;
    }

    public function getImages()
    {
        return $this->images;
    }

    
    public function setImages($images)
    {
        $this->images = $images;
    }

}