<?php

require "system/Routing.php"; 
$url = key($_GET); 

$r = new Router(); 
$r->addRoute("/", "main.php"); 
$r->addRoute("/main2", "main2.php"); 

$r->route("/".$url);  