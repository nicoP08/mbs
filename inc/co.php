<?php

session_start();

$host_name = 'db752756822.db.1and1.com';
$database = 'db752756822';
$user_name = 'dbo752756822';
$password = 'lR*lBKBO2A)}o9P';

$dbh = null;
try {
  $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
} catch (PDOException $e) {
  echo "Erreur!: " . $e->getMessage() . "<br/>";
  die();
}

$dbh->exec("SET CHARACTER SET utf8");
?>