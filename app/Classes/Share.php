<?php
/**
 * Created by IntelliJ IDEA.
 * User: karine
 * Date: 2017-12-26
 * Time: 2:24 AM
 */

namespace App\Classes;


class Share
{   
    private $userId;
    private $postId;

    function _construct($data){
        $this->SetAll($data);
    }

    public function setAll($data){
        if(isset($data->userId)){
            $this->userId = $data->userId;
        }
        if(isset($data->postId)){
            $this->postId = $data->postId;
        }
    }

    public function getAll(){
        $returnData = new \stdClass();

        $returnData->userId = $this->userId;
        $returnData->postId = $this->postId;

        return $returnData;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    
    public function getPostId()
    {
        return $this->postId;
    }

    
    public function setPostId($postId)
    {
        $this->postId = $postId;
    }
    
    
}