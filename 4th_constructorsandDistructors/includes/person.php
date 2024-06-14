

<?php

class Person {
    // properties
    public $name;
    private $eyeColor;
    private $age;

    // constructors
    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // getter methods
    public function getName() {
        return $this->name;

    }

    public function getEyeColor() {
        return $this->eyeColor;
    }

    public function getAge() {
        return $this->age;

        // this is  the sub branch
    }
}