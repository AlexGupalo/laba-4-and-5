<?php
require('db.php');

if(isset($_GET['id'])){
    $id = $_GET["id"];

    $db->query("DELETE FROM plants WHERE id=$id");

    header('location:list.php');
}
?>