<?php
//This is my CONTROLLER for the hello project

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();
//Java Equivalent === Base f3 = new Base()


//Define a default root
$f3->route('GET /', function(){
    echo '<h1>Hello, Fat Free</h1>';
});

//Run Fat-Free
$f3->run();
//Java Equivalent ->f3.run()


