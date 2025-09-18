<?php
$conn = mysqli_connect("localhost", "ibrohim", "StrongP@ss123", "php_crud");

if ($conn) {

    $conn->query("INSERT INTO users (id,name, mobile_number , created_at) VALUES (2,'ibrohim2','+998992401064' , now())");

    $users = $conn->query("select * from users")->fetch_all();
    var_dump($users);

} else {
}

