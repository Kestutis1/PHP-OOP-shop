<?php

class dbh {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "parduotuve";
        $this->charset = "utf8mb4";


        try {
          $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
          $pdo = new PDO($dsn, $this->username, $this->password);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $pdo;

        } catch (PDOException $e) {
          echo "Nepavyko prisijungti prie duombazės!".$e->getMessage();
        }
    }

}

 ?>
