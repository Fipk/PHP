<?php
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "spawn");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "OUI");
$db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);