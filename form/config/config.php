<?php

class Config
{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "product_db";
    private $create;


    public function __construct()
    {
        $this->create = mysqli_connect($this->localhost, $this->username, $this->password, $this->database, );
    }

    function insertDatabase($name, $price, $category)
    {
        $query = "INSERT INTO products (name,price,description) VALUES ('$name',$price,'$category')";
        $insertDate = mysqli_query($this->create, $query);

        return $insertDate;
    }

    function selectDatabase()
    {
        $query = "SELECT * FROM products";

        $selectData = mysqli_query($this->create, $query);

        return $selectData;
    }

    function removeProduct($id)
    {
        $query = "DELETE FROM products WHERE id=$id";
        $res =mysqli_query($this->create, $query);
        return $res;
    }



    function updateProduct($id, $name, $price, $category)
    {
        $query = "UPDATE products SET name='$name',price=$price,description='$category' WHERE id=$id";
        mysqli_query($this->create, $query);
    }
}


?>