<?php
$dbhost = getenv('ARCTEAM_DB_HOST');
$dbusername = getenv('ARCTEAM_DB_USER');
$password= getenv('ARCTEAM_DB_USER');
$database_name = getenv('ARCTEAM_DB_NAME');

$connection = pg_connect("host=$dbhost user=$dbusername password=$password dbname=$database_name")
	or die ("Impossibile connettersi al server");
?>
