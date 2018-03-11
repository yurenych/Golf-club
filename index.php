<?php

// If not isset session start session.
if(!isset($_SESSION)){
    session_start();
}

// Include config.
require_once("config.php");

// Include routing.
require_once("vendor" . DS . "router.php");

// Start routing.
Route::start();