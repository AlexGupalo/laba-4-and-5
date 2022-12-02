<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");
    $id = $_GET['id'];
    $i = 0;

    foreach ($xml->plant as $plant) {

        if ($plant['id'] == $id) {
            unset($xml->plant[$i]);

            // обновляет теги элементов
            $i = 1;
            foreach ($xml->plant as $plant) {
                $plant['id'] = $i++;
            }
            
            break;
        }

        $i++;
    }
    
    $xml->saveXML('data.xml');
    header('location:list.php');
}
?>