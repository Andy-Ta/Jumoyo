<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2017-12-20
 * Time: 10:06 PM
 */

namespace App\Classes;


class Review
{
    private $id;
    private $reviewerId;
    private $serviceId;
    private $dateTime;
    private $stars;
    private $text;

    function __construct($data)
    {
        $this->setAll($data);
    }

    public function setAll($data)
    {
        if (isset($data->id)) {
            $this->id = $data->id;
        }
        if (isset($data->userId)) {
            $this->reviewerId = $data->userId;
        }
        if (isset($data->serviceId)) {
            $this->serviceId = $data->serviceId;
        }
        if (isset($data->dateTime)) {
            $this->dateTime = $data->dateTime;
        }
        if (isset($data->stars)) {
            $this->stars = $data->stars;
        }
        if (isset($data->text)) {
            $this->text = $data->text;
        }
    }

    public function getAll()
    {
        $returnData = new \stdClass();

        $returnData->id = $this->id;
        $returnData->userId = $this->reviewerId;
        $returnData->serviceId = $this->serviceId;
        $returnData->dateTime = $this->dateTime;
        $returnData->stars = $this->stars;
        $returnData->text = $this->text;

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

    public function getReviewerId()
    {
        return $this->reviewerId;
    }

    public function setReviewerId($reviewerId)
    {
        $this->reviewerId = $reviewerId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    public function getDateTime()
    {
        return $this->dateTime;
    }

    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }

    public function getStars()
    {
        return $this->stars;
    }

    public function setStars($stars)
    {
        $this->stars = $stars;
    }
    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

}