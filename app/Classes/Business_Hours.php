<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2017-12-20
 * Time: 10:27 PM
 */

namespace App\Classes;


class Business_Hours
{
    private $days; // list of 7 boolean values in which will be use to determine working days
    private $startTime;
    private $endTime;

    function __construct($data)
    {
        $this->setAll($data);
    }

    public function setAll($data)
    {
        if (isset($data->days)) {
            $this->days = $data->days;
        }
        if (isset($data->startTime)) {
            $this->startTime = $data->startTime;
        }
        if (isset($data->endTime)) {
            $this->endTime = $data->endTime;
        }
    }

    public function getAll()
    {
        $returnData = new \stdClass();

        $returnData->days = $this->days;
        $returnData->startTime = $this->startTime;
        $returnData->endTime = $this->endTime;

        return $returnData;
    }

    public function getDays()
    {
        return $this->days;
    }

    public function setDays($days)
    {
        $this->days = $days;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

}