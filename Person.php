<?php
    class Person{
        private $name, $address, $age;

        public function __construct($name, $address, $age)
        {
            $this->setName($name);
            $this->setAddress($address);
            $this->setAge($age);
        }

        public function setName($name){
            if(is_string($name)){
                $this->name = $name;
            }
            else{
                echo"Invalid name...";
            }
        }

        public function getName(){
            return $this->name;
        }

        public function setAddress($address){
            if(is_string($address)){
                $this->address = $address;
            }
            else{
                echo"Invalid address...";
            }
        }

        public function getAddress(){
            return $this->address;
        }

        public function setAge($age){
            if(is_numeric($age)){
                $this->age = $age;
            }
        }

        public function getAge(){
            echo"Invalid age...";
        }

        public function __toString($name, $age, $address)
        {
            echo"Name: " . $this->name . "\nAge : " . $this->age . "\nAddress : " . $this->address;
        }

        

    }
?>