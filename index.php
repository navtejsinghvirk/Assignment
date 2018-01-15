<?php
//require the autolaod file
require_once ('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /',
    function() {
        $view = new View;
        echo $view->rendor
        ('Assignment/arrayfunction.php');
    }
);

//run fat free
$f3->run();
?>