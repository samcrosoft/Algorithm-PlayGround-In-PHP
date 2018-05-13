<?php

class Person 
{
    private $personName;

    function __construct(string $personName){
        $this->personName = $personName;
    }

    public function setPersonName(string $newName){
        $this->personName = $newName;
    }

    public function getPersonName() {
        return $this->personName;
    }
}




function changePersonName(Person $person, string $newName){
    $person->setPersonName($newName);
}


function p(string $output){
    print($output);
    print("\n");
}


$p1 = new Person("adebola");
p($p1->getPersonName());
changePersonName($p1, "johnson");
p($p1->getPersonName());
$p2 = clone $p1;
p($p2->getPersonName());
changePersonName($p2, "winnie");
p($p2->getPersonName());