<?php
declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    try{
        $ObjectPerson = new Person("John", 30); // Note: I removed the quotes around the age
        echo $ObjectPerson->getPerson();
    }catch(TypeError $e){
      echo "Error:".$e->getMessage();
    }

    ?>
</body>
</html>