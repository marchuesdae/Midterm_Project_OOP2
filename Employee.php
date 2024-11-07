<?php
require_once 'Person.php';

abstract class Employee extends Person {
    private $companyName;

    public function __construct($name, 
                                $address, 
                                $age, 
                                $companyName) 
    
    {
        parent::__construct($name, $address, $age);
        $this->companyName = $companyName;
    }

    public function setCompanyname($companyName) {
        $this->companyName = $companyName;
    }

    public function getCompanyname() {
        return $this->companyName;
    }

    abstract public function earnings();

    public function __toString() {
        return parent::__toString() . "\nCompany: " . $this->companyName;
    }
}
?>
