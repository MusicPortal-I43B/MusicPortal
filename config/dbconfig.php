<?php
$hostname = 'localhost';
$usernameDB = 'root';
$passwordDB = '';
$dbname = 'music_portal';

//Create connection to mysql database
$conn = new mysqli($hostname, $usernameDB, $passwordDB, $dbname);