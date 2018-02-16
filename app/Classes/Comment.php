<?php
/**
 * Created by IntelliJ IDEA.
 * User: karine
 * Date: 2017-12-26
 * Time: 1:58 AM
 */

namespace App\Classes;


class Comment
{
    private $id;
    private $commenterId;
    private $postId;
    private $dateTime;
    private $text;

    function _construct($data){
        $this->setAll($data);
    }

    public function setAll($data){

        if(isset($data->id)){
            $this->id = $data->id;
        }

        if(isset($data->commenterId)){
            $this->commenterId = $data->commenterId;
        }

        if(isset($data->postId)){
            $this->postId = $data->postId;
        }

        if(isset($data->dateTime)){
            $this->dateTime = $data->dateTime;
        }

        if(isset($data->text)){
            $this->text = $data->text;
        }
    }

    public function getAll(){

        $returnData = new \stdClass();

        $returnData->id = $this->id;
        $returnData->commenterId = $this->commenterId;
        $returnData->postId = $this->postId;
        $returnData->dateTime = $this->dateTime;
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

    public function getCommenterId()
    {
        return $this->commenterId;
    }

    public function setCommenterId($commenterId)
    {
        $this->commenterId = $commenterId;
    }

    public function getPostId()
    {
        return $this->postId;
    }

    public function setPostId($postId)
    {
        $this->postId = $postId;
    }

    public function getDateTime()
    {
        return $this->dateTime;
    }

    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
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