<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// to use the class in here we make it and object through the key work new
include "includes/person.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ObjectPerson = new Person();
// unset delete the object
unset($ObjectPerson);
$ObjectPerson->setName('alfred');
echo $ObjectPerson->name;
?>

</body>
</html>