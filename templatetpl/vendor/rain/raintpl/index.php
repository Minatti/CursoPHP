<?php 

require_once("..../vendor/autoload.php");
//require_once("vendor/autoload.php");


// namespace
use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "raintpl/",
    "cache_dir"     => "templates/"
);

Tpl::configure( $config );
// create the Tpl object
$tpl = new Tpl;
// assign a variable
//$tpl->assign( "name", "Obi Wan Kenoby" );
// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
// draw the template
$tpl->draw( "index" );

  
//http://localhost:8080/Udemy/PHP/Tpl/vendor/rain/raintpl/index.php

  ?>