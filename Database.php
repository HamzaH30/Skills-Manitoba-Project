<?php
/*
  ===== Extra comments about how I created the database & table. You can also see the attributes created ===
  In phpmyadmin, you can see that I have created a database and a table.

  The sql query that I ran is:
  CREATE TABLE requests (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
      first_name VARCHAR(255) NOT NULL,
      last_name VARCHAR(255) NOT NULL,
      phone_number VARCHAR(50) NOT NULL,
      email VARCHAR(255) NOT NULL,
      product_name VARCHAR(255) NOT NULL,
      quantity INT NOT NULL,
      comments TEXT,
      order_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
  );

  I then created a User account with certain privileges to the database.
*/

// Class to manage the connection between database & code
class Database
{
  private $pdoConnection;

  public function __construct($config)
  {
    try {
      $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";

      // create an instance of the pdo class - establishing the connection - connect to MySQL database using PDO (php data objects)
      $this->pdoConnection = new PDO($dsn, $config['user'], $config['password'], options: [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
    } catch (PDOException $e) {
      echo "Connection error: " . $e->getMessage();
    }
  }

  /*
    This method is responsible for running the insert query in MySQL.
    It takes in the form data passed by the user.
  */
  public function insertData($params = []): bool
  {
    // The project scope only specifies us to insert data, hence, why I am just querying an insert.
    $statement = $this->pdoConnection->prepare(
      "INSERT INTO `requests`(`first_name`, `last_name`, `phone_number`, `email`, `product_name`, `quantity`, `comments`) 
      VALUES (:fname, :lname, :phoneNumber, :email, :productName, :quantity, :comments)"
    );
    return $statement->execute($params);
  }

  public function closeConnection()
  {
    $this->pdoConnection = null;
  }
}
