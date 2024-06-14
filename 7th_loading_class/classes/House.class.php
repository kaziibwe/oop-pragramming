

<?php

class House {
    public $street;
    public $protNumber;


    public function __construct($street, $protNumber) {
        $this->street = $street;
        $this->protNumber = $protNumber;
    }

    public function getPerson(){
        $house = "MY house is at". $this->street ."street on prot number".$this->protNumber;
        return $house;
        
    }


}