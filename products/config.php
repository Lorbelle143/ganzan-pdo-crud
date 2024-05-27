<?php


$servername = "localhost";
$username = "u593341949_dev_ganzan";
$password = "20221055Ganzan";
$dbname = "u593341949_db_ganzan";


try {   
 $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 die("Database connection failed: " . $e->getMessage());
}

