<?php

class Cast{

    public $protagonist;
    public $antagonist;
    public $co_protagonist;

    function __construct(string $_protagonist, string $_antagonist, string $_co_protagonist)
    {
        $this->protagonist = $_protagonist;
        $this->antagonist = $_antagonist;
        $this->co_protagonist = $_co_protagonist;

    }

}

?>