<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2017-12-20
 * Time: 10:14 PM
 */

namespace App\Classes;


class Service
{
    private $id;
    private $name;
    private $category; // ENUM --> maybe just a list of strings ps:keeping like this for the moment need more discussion
    private $priceHourly;
    private $price;
    private $description;
    private $businessHours; // business_hours object
    private $posts; // list of posts
    private $portfolio; // portfolio object

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
        if (isset($data->category)) {
            $this->id = $data->id;
        }
        if (isset($data->priceHourly)) {
            $this->priceHourly = $data->priceHourly;
        }
        if (isset($data->price)) {
            $this->price = $data->price;
        }
        if (isset($data->description)) {
            $this->description = $data->priceHourly;
        }
        if (isset($data->businessHours)) {
            $this->businessHours = $data->businessHours;
        }
        if (isset($data->posts)) {
            $this->posts = $data->posts;
        }
        if (isset($data->portfolio)) {
            $this->portfolio = $data->portfolio;
        }
    }

    public function getAll()
    {
        $returnData = new \stdClass();

        $returnData->id = $this->id;
        $returnData->name = $this->name;
        $returnData->category = $this->category;
        $returnData->priceHourly = $this->priceHourly;
        $returnData->price = $this->price;
        $returnData->description = $this->description;
        $returnData->businessHours = $this->businessHours;
        $returnData->posts = $this->posts;
        $returnData->portfolio = $this->portfolio;

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

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getPriceHourly()
    {
        return $this->priceHourly;
    }

    public function setPriceHourly($priceHourly)
    {
        $this->priceHourly = $priceHourly;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    public function setBusinessHours($businessHours)
    {
        $this->businessHours = $businessHours;
    }

    public function getPosts()
    {
        return $this->posts;
    }

    public function setPosts($posts)
    {
        $this->posts = $posts;
    }

    public function getPortfolio()
    {
        return $this->portfolio;
    }

    public function setPortfolio($portfolio)
    {
        $this->portfolio = $portfolio;
    }

}