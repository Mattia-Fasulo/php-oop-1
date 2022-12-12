<?php
include __DIR__ . '/Models/Movies.php';

$cast = new Cast("Christian Bale","Cillian Murphy","Michael Caine");

$Batman = new Movie("Batman Begins","Batman Begins", "Christopher Nolan",2005,["azione", "thriller", "drammatico"],$cast);

var_dump($Batman);

?>