<?php
require_once 'db.php';

class Products
{
    private $id_p;
    private $name_p;
    private $price_p;
    private $connection;

    public function __construct($id_p, $name_p, $price_p)
    {
        $this->id_p = $id_p;
        $this->name_p = $name_p;
        $this->price_p = $price_p;

        $host = 'localhost';
        $dbName = 'ecom_db';
        $username = 'root';
        $password = '';

        $this->connection = new mysqli($host, $username, $password, $dbName);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getIdP()
    {
        return $this->id_p;
    }

    public function setIdP($id_p)
    {
        $this->id_p = $id_p;
    }

    public function getNameP()
    {
        return $this->name_p;
    }

    public function setNameP($name_p)
    {
        $this->name_p = $name_p;
    }

    public function getPriceP()
    {
        return $this->price_p;
    }

    public function setPriceP($price_p)
    {
        $this->price_p = $price_p;
    }

    public function addProduct()
    {
        $sql = "INSERT INTO products (id_p, name_p, price_p) VALUES (?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("iss", $this->id_p, $this->name_p, $this->price_p);
        $stmt->execute();
        $stmt->close();
    }

    public function closeConnection()
    {
        $this->connection->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $product = new Product($id, $name, $price);

    $product->addProduct();

    header("Location: dashboard.php");
    exit();
}
?>