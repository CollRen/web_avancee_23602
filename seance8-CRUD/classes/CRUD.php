<?php

class CRUD extends PDO {

    public function __construct(){
        parent::__construct('mysql:host=localhost;dbname=ecommerce;port=3306;charset=utf8', 'root', '');
    }

    public function select($table, $field = 'id', $order = 'asc'){
        $sql = "SELECT * FROM $table ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    public function selectId($table, $value, $url, $field = 'id'){
        $sql = "SELECT * FROM $table WHERE $field = :$field";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();

        $count = $stmt->rowCount();
        if($count == 1) {
            return $stmt->fetch();
        }else{
            header("location:$url.php");
            exit;
        }

    }

    public function insert($table, $data){

        $sql = "INSERT INTO $table (name, address, zip_code, phone, email) VALUES (:name, :address, :zip_code, :phone, :email)";
        

        return $data;
    }


    //select

    //select  Id

    //insert

    //update

    //delete
}

?>