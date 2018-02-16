<?php
/**
 * Created by IntelliJ IDEA.
 * User: karine
 * Date: 2017-12-26
 * Time: 2:04 AM
 */

namespace App\Classes;


class Post
{
    private $id;
    private $serviceId;
    private $url;
    private $text;
    private $likes; // list of likes
    private $shares; // list of shares
    private $comments; // list of comments

    function _construct($data){
        $this->setAll($data);
    }

    public function setAll($data){

        if(isset($data->id)){
            $this->id = $data->id;
        }

        if(isset($data->serviceId)){
            $this->serviceId = $data->serviceId;
        }

        if(isset($data->url)){
            $this->url = $data->url;
        }

        if(isset($data->text)){
            $this->text = $data->text;
        }

        if(isset($data->likes)){
            $this->likes = $data->likes;
        }

        if(isset($data->shares)){
            $this->shares = $data->shares;
        }

        if(isset($data->comments)){
            $this->comments = $data->comments;
        }

    }

    public function getAll(){
        $returnData = new \stdClass();

        $returnData->id = $this->id;
        $returnData->serviceId = $this->serviceId;
        $returnData->url = $this->url;
        $returnData->text = $this->text;
        $returnData->likes = $this->likes;
        $returnData->shares = $this->shares;
        $returnData->comments = $this->comments;

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


    public function getServiceId()
    {
        return $this->serviceId;
    }

    
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }


    public function getUrl()
    {
        return $this->url;
    }

    
    public function setUrl($url)
    {
        $this->url = $url;
    }


    public function getText()
    {
        return $this->text;
    }

    
    public function setText($text)
    {
        $this->text = $text;
    }


    public function getLikes()
    {
        return $this->likes;
    }

    
    public function setLikes($likes)
    {
        $this->likes = $likes;
    }


    public function getShares()
    {
        return $this->shares;
    }

    
    public function setShares($shares)
    {
        $this->shares = $shares;
    }


    public function getComments()
    {
        return $this->comments;
    }

    public function setComments($comments)
    {
        $this->comments = $comments;
    }


}