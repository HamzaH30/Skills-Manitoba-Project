<?php

require 'Database.php';

// Used to make sure wheter or not the index.php should render the form
$querySuccess = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Passing in the form data. Associative array to prevent SQL injection
  $params = [
    ':fname' => $_POST['fname'],
    ':lname' => $_POST['lname'],
    ':phoneNumber' => $_POST['phoneNumber'],
    ':email' => $_POST['email'],
    ':productName' => $_POST['product'],
    ':quantity' => $_POST['quantity'],
    ':comments' => $_POST['comments']
  ];

  // Database configuration
  $config = [
    'host' => 'localhost',
    'dbname' => 'tmb',
    'charset' => 'utf8mb4',
    'user' => 'admin', // This is the user created
    'password' => 'PvFwkannQ1/b]xx)' // Corressponding password
  ];

  $db = new Database($config);
  $querySuccess = $db->insertData($params);

  // Safe code:
  $db->closeConnection();
}
