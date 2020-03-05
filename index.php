<?php
include_once ("config\db_helpers.php");
//db_insert("books", ["Name" => "Test Book"]);


db_create("users", [
    "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "firstname VARCHAR(30) NOT NULL",
    "lastname VARCHAR(30) NOT NULL"
]);

db_alter('users', [
    "age INT",
    "info TEXT"
]);

