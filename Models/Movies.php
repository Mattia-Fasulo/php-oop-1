<?php
include __DIR__ . '/Cast.php';
class Movie {

    public $title;
    public $originalTitle;
    public $producer;
    public $year;
    public $urlStreaming;
    public $avaiable;
    public $genre;
    

    public $cast;

    function __construct(string $_title,string $_originalTitle = null, string $_producer,int $_year,array $_genre = null, Cast $_cast = null, string $_urlStreaming = null)
    {
        $this->title = $_title;
        $this->originalTitle = $_originalTitle;
        $this->producer = $_producer;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->cast = $_cast;
        $this->urlStreaming = $_urlStreaming;

        $this->setAvaiable();
        
    }

    public function setAvaiable(){
        if($this->urlStreaming == null){
            $this->avaiable = false;
        }else{
            $this->avaiable == true;
        }
    }
    }

 ?>