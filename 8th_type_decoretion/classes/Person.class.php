<?php
class Person {
    public $name;
    public $age;

    public function __construct(string $name,int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getPerson(){
        $person = $this->name ." is ".$this->age. " years old";
        return $person;
    }
}