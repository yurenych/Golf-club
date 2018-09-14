<?php

// If not isset session start session.
if(!isset($_SESSION)){
    session_start();
}

function var_log( $object=null ){
  ob_start();                    // start buffer capture
  var_dump( $object );           // dump the values
  $contents = ob_get_contents(); // put the buffer into a variable
  ob_end_clean();                // end capture
  error_log( $contents );        // log contents of the result of var_dump( $object )
}

// Include config.
require_once("config.php");

// Include routing.
require_once("vendor" . DS . "router.php");

// Start routing.
Route::start();
