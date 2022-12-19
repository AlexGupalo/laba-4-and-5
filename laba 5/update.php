<?php 

require('db.php');

if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $id = $_GET['id'];
    $plant = $db->query("SELECT * FROM plants WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);

    if(count($plant) > 0){
        $plant = $plant[0];
    }

} else if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $photo = $_POST['photo'];

    $db->query("UPDATE plants SET name='$name', price='$price', photo='$photo' WHERE id=$id");

    header('location:list.php');
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
    <title>Document</title>
</head>

<body>
    <form method="POST" action="update.php?id=<?= $id ?>">
        <br>
        Name of plant: <input type="text" name="name" value="<?php echo $plant['name'] ?>">
        <br>
        <br>
        Price in $: <input type="text" name="price" value="<?php echo $plant['price'] ?>">
        <br>
        <br>
        Paste URL here: <input type="text" name="photo" value="<?php echo $plant['photo'] ?>">
        <input type="hidden" value="<?php echo $plant['id'] ?>" name="id"/>
        <input type="submit" value="Save" />
    </form>
</body>

</html>