<?php

//phpinfo();

$dsn = 'mysql:host=mysql;dbname=app_db';
$user = 'dev';
$pass = 'secret';

$gbd = new PDO($dsn, $user, $pass);

echo("CONNECTION OK");
