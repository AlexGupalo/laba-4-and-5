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
    <?php
    $id = 0;
    $name = '';
    $price = '';

    $xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $id = $_GET['id'];

        foreach ($xml->plant as $plant) {

            if ($plant['id'] == $id) {

                $name = $plant->name;
                $price = $plant->price;
                $node = $plant;

                break;
            }
        }
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $id = $_POST['id'];

        foreach ($xml->plant as $plant) {

            if ($plant['id'] == $id) {

                $plant->name = $_POST['name'];
                $plant->price = $_POST['price'];

                break;
            }
        }

        $xml->saveXML('data.xml');
        header('location:list.php');
    }
    ?>

    <form method="POST" action="update.php?id=<?= $id ?>">
        <br>
        Name of plant: <input type="text" name="name" value="<?= $name ?>">
        <br>
        <br>
        Price in $: <input type="text" name="price" value="<?= $price ?>">
        <br>
        <br>
        <input type="hidden" value="<?= $id ?>" name="id"/>
        <input type="submit" value="Save" />
    </form>
</body>

</html>