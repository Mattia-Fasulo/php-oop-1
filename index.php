<?php
include __DIR__ . '/Models/Movies.php';

$castBatman = new Cast("Christian Bale","Cillian Murphy","Michael Caine");

$castAvatar = new Cast("Sam Worthington", "Stephen Lang", "Zoe Saldana");

$batman = new Movie("Batman Begins","Batman Begins", "Christopher Nolan",2005,["azione", "thriller", "drammatico"],$castBatman);

var_dump($batman);

$avatar = new Movie("Avatar", "Avatar", "James Cameron", 2009, ["fantascienza", "azione", "avventura"], $castAvatar, "https://straming.com");

var_dump($avatar);


?>