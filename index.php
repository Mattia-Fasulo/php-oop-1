<?php
include __DIR__ . '/Models/Movies.php';

$Batman = new Movie("Batman Begins", "Christopher Nolan","Batman Begins",2005, ["azione", "thriller", "drammatico"] );

var_dump($Batman);

?>