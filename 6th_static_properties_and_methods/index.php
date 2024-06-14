<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include "includes/person.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$ObjectPerson = new Person;
echo $ObjectPerson::getDA(); // Output: 21

Person::setDrinkingAge(25);
echo Person::$drinkingAge; // Output: 25


?>

</body>
</html>