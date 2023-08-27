<?php

require_once __DIR__ . '/../config/db.php';

class Client {
    private $username_c;
    private $password_c;
    private $connection;

    public function __construct($username_c, $password_c) {
        $this->username_c = $username_c;
        $this->password_c = $password_c;

        // Use the database connection details from db.php
        $host = 'localhost';
        $dbName = 'ecom_db';
        $username = 'root';
        $password = '';

        $this->connection = new mysqli($host, $username, $password, $dbName);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function validateClientCredentials() {
        $sql = "SELECT * FROM client WHERE username_c = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("s", $this->username_c);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if ($this->password_c === $row['password_c']) {
                return true; // Valid credentials
            }
        }
    
        return false; // Invalid credentials
    }

    public function closeConnection() {
        $this->connection->close();
    }
}

?>