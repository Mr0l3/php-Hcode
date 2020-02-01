<?php

class Sql extends PDO{
    private $conn;

    public function __construct(){
        $this->conn = new PDO('mysql:host=127.0.0.1;dbname=dbphp7', 'root', 'root');
    }


    private function setParams(object $statment, array $params = array()){
        foreach($params as $key => $value){  // pega cada conjunto de chave e valor e da bind neles
            $this->setParam($statment, $key, $value);
        }
    }


    private function setParam(object $statment, string $key, string $value){
        $statment->bindParam($key, $value);
    }


    public function query(string $rawQuery, array $params = array()): object{
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }


    public function select(string $whatSelect, string $table, string $whereSelect = '', string $ordByWhat = '', array $param = array()): array{
        if(strlen(trim($whereSelect)) > 0){
            if(strlen(trim($ordByWhat)) > 0){
                $stmt = $this->query("SELECT $whatSelect FROM $table WHERE $whereSelect ORDER BY $ordByWhat", $param);
            }else{
                $stmt = $this->query("SELECT $whatSelect FROM $table WHERE $whereSelect", $param);
            }
        }else{
            if(strlen(trim($ordByWhat)) > 0){
                $stmt = $this->query("SELECT $whatSelect FROM $table ORDER BY $ordByWhat", $param);
            }else{
                $stmt = $this->query("SELECT $whatSelect FROM $table", $param);
            }
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
