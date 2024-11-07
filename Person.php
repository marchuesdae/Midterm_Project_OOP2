<?php
class Person {
    private $name, $address, $age;

    public function __construct($name, $address, $age) {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }

    public function setName($name) {
        if (is_string($name)) {
            $this->name = $name;
        } else {
            echo "Invalid name...\n";
        }
    }

    public function getName() {
        return $this->name;
    }

    public function setAddress($address) {
        if (is_string($address)) {
            $this->address = $address;
        } else {
            echo "Invalid address...\n";
        }
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAge($age) {
        if (is_numeric($age) && $age > 0) {
            $this->age = $age;
        } else {
            echo "Invalid age...\n";
        }
    }

    public function getAge() {
        return $this->age;
    }

    public function __toString() {
        return "Name: " . $this->name . "\nAge: " . $this->age . "\nAddress: " . $this->address . "\n";
    }
}
?>
