<?php
class Person {
    public static $drinkingAge = 21;

    public static function getDA(){
        return self::$drinkingAge;
    }
    
    public static function setDrinkingAge($newDa){
        self::$drinkingAge=$newDa ;
    
    }
}

