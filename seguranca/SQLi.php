<?php

if(isset($_GET["id"]) && is_numeric($_GET["id"])){
    $id = (int)$_GET["id"];
}else{
    exit("Invalid ID");
}

var_dump("id=  " . $id);
echo "<br/>";

$conn = mysqli_connect("127.0.0.1", "root", "root", "dbphp7");
$query = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$results = mysqli_query($conn, $query);

while($result = mysqli_fetch_object($results)){
    print_r($result);
}
mysqli_close($conn);
