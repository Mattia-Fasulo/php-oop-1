<?php

class Movie {

    public $title;
    public $originalTitle;
    public $producer;
    public $year;
    public $genre;

    function __construct(string $_title,string $_originalTitle = null, string $_producer,int $_year, $_genre=[] )
    {
        $this->title = $_title;
        $this->originalTitle = $_originalTitle;
        $this->producer = $_producer;
        $this->genre = $_genre;
        $this->year = $_year;
        
    }
    }

 ?>