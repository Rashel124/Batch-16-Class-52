<?php
class Test {

    // public function __construct() 
    // {
        // echo "Constructor";
        // echo "<br>";
    // }

    public function show () 
    {
        echo "Hello World";
}
    public function greeting ()
    {
        echo "Good Morning"."<br>";
    }
    // public function __destruct()
    // {
        // echo "Destructor";
    // }

}
$objectTest = new Test();
// $objectTest->show();
// echo "<br>";
// $objectTest->greeting();

class Parents {
    public function flat()
    {
        echo "3HBK20 Flat"."<br>";

    }
    public function car()
    {
        echo "Allion"."<br>";
    }

    protected function bankAccount ()
    {
        echo "Acccount: 11212344564554";
    }
    private function accessAccount()
    {
        $this->bankAccount();

    }
    
}

class Child extends Parents {
    Public function accessParentAccount()
    {
        $this->bankAccount();
    }
    public function bike()
    {
        echo "Royal Enfield <br>";
    }

}

// $objectParents = new Parents();
// $objectParents->flat();
// $objectParents->car();

$objectChild = new Child();
$objectChild->bike();
$objectChild->flat();
$objectChild->car();
$objectChild->accessParentAccount();

?>

