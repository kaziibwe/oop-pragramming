<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// include "includes/person.php";

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
//     $ObjectPerson = new Person('alfred','blue','28');
//     echo $ObjectPerson->name ;
//     echo $ObjectPerson->eyeColor ;
//     echo $ObjectPerson->age ;




    include "includes/person.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// create an instance of the Person class
$ObjectPerson = new Person('alfred', 'blue', '28');

// access properties using getter methods
echo $ObjectPerson->getName(). "<br>";
echo $ObjectPerson->getEyeColor(). "<br>";
echo $ObjectPerson->getAge(). "<br>";

    ?>
</body>
</html>