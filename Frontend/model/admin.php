<?php
require_once __DIR__ . '/../config/db.php';

class Admin {

    private $username_a;
    private $pass_a;
    private $connection;

    public function __construct($username_a, $pass_a) {
        $this->username_a = $username_a;
        $this->pass_a = $pass_a;

        
        $host = 'localhost';
        $dbName = 'ecom_db';
        $username = 'root';
        $password = '';

        $this->connection = new mysqli($host, $username, $password, $dbName);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getUsernameA() {
        return $this->username_a;
    }

    public function setUsernameA($username_a) {
        $this->username_a = $username_a;
    }

    public function getPassA() {
        return $this->pass_a;
    }

    public function setPassA($pass_a) {
        $this->pass_a = $pass_a;
    }

    public function validateAdminCredentials($username, $password) {
        $sql = "SELECT * FROM admin WHERE username_a = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['pass_a'])) {
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
