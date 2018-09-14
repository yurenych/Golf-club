<?php

// Display errors from application.
ini_set('display_errors', 1);

// Const application configuration.
define('DS', DIRECTORY_SEPARATOR);

// Where upload images.
define('UPLOAD_IMAGES', 'public/src/img/');
define('UPLOAD_FILES', 'public/src/uploads/');
define('IMAGES_GALERIA', UPLOAD_IMAGES . 'galeria/');

// Set anti csrf-attack.
define('CSRF_TOKEN', '601d4e8b5fd64071b944e774a0dfe26a');

// Set year to view in footer.
define('YEAR', date('Y'));

// Const from connect to DB hosting.
define('DB_LOCALHOST', 'localhost');
define('DB_DATABASE', 'serwer21700_Baza');
define('DB_USERNAME', 'serwer21700');
define('DB_PASSWORD', 'chimgee2014');

// Const from connect to DB local.
//define('DB_LOCALHOST', 'localhost');
//define('DB_DATABASE', 'golf_club');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');

// Set admin validation data.
define('USER_LOGIN', 'admin');
define('USER_PASSWORD', 'password');

// Set languages.
$GLOBALS['LANGUAGES'] = ['pl', 'eng'];

// Add link to socials services.
define('LINK_EMAIL', 'example@example.com');
define('LINK_FACEBOOK', 'https://www.facebook.com/example');
