<?php
namespace ComposerInit;

class BaseFatory{
    private $uid;

    public function __construct()
    {

    }

    public function setUid($uid){
        $this->uid = $uid;
    }
    /**
     *
     */
    public function getUid(){
        return $this->uid;
    }
}

?>
