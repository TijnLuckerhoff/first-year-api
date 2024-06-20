<?php
include("./proxy.php");

$swapi = 'https://swapi.py4e.com/api';

$nascar = 'https://api.sportradar.us/nascar-ot3';
$key = 'hxocgznbtR9YFOgaSltR88vjOO1ftla78NwYl10N';

//setup the Proxy with the right credentials
$proxy = new Proxy($nascar, $key);

//get the data
$request = $_COOKIE['testcookie'];

$result = $proxy->getData('' . $request . '');

//print the data to the frontend.
print_r($result);