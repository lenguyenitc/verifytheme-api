<?php
/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** ENVATO_USERNAME */
define("ENVATO_USERNAME", "");

/** ENVATO_KEY */
define("ENVATO_KEY", "");

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
