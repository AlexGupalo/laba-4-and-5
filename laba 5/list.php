<?php

require("db.php");
$plants = $db->query("SELECT * FROM plants")->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/media_style.css">
    <title>list of plants</title>
</head>
<body>
    <h1>Plants' list</h1>
    <a href="create.php">Create new item</a>
    <br>
    <hr>
    <a href="index.php">Check main page</a>
    <hr>
    <br>
    <?php foreach ($plants as $plant) { ?>
        <div class="gallery_item php_list">
            <div class="gallery_item_photo" id="<?php echo $plant['photo'] ?>"></div>
            <p class="gallery_item_name"><?php echo $plant['name'] ?></p>
            <p class="gallery_item_price">$ <?php echo $plant['price'] ?></p>
            <br>
            <a href="update.php?id=<?php echo $plant["id"]?>">Update item</a>
            <br>
            <a href="delete.php?id=<?php echo $plant["id"]?>" onclick="return CheckDelete(this)">Delete item</a>
        </div>
        <!-- -->
        <br>
        <hr>
        <br>
    <?php }?>
    <script type="text/javascript">
        function CheckDelete(node) {
            return confirm("Are you sure about that? (c) Jhon Seana");
        }
    </script>
</body>
</html>