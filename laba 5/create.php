<?php

require("db.php");

if(isset($_POST["submit"])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $photo = $_POST['photo'];

    $db->query("INSERT INTO plants (name, price, photo) VALUES ('$name', '$price', '$photo')");

    //var_dump($db);

    echo "<script> alert('TEST') </script>";

    //header('location:list.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/media_style.css">
    <title>Create item page</title>
</head>

<body>

    <br>
    <form method="POST" action="create.php">
        Name of plant: <input type="text" name="name" placeholder="Kaktus plant" required>
        <br>
        <br>
        Price in $: <input type="text" name="price" placeholder="80.000" required>
        <br>
        <br>
        Paste URL here: <input type="text" name="photo" placeholder="URL" required>
        <br>
        <br>
        <input type="submit" value="Save">

    </form>
</body>

</html>