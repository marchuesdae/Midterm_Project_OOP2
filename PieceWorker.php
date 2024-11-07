<?php
class PieceWorker extends Employee {
    private $numberItems, $wagePerItem;

    public function __construct($name, 
                                $address, 
                                $age, 
                                $companyName, 
                                $numberItems, 
                                $wagePerItem) 
    {
        parent::__construct($name, $address, $age, $companyName);
        $this->numberItems = $numberItems;
        $this->wagePerItem = $wagePerItem;
    }

    public function setNumberI($numberItems){
        $this->numberItems = $numberItems;
    }

    public function getNumberI(){
        return $this->numberItems;
    }

    public function setWagePI($wagePerItem){
        $this->wagePerItem = $wagePerItem;
    }

    public function getWagePI(){
        return $this->wagePerItem;
    }

    public function earnings() {
        return $this->numberItems * $this->wagePerItem;
    }

    public function __toString() {
        return parent::__toString() . 
        "\nNumber of Items: ". $this->numberItems .
        "\nWage per Item: ". $this->wagePerItem . 
        "\nEarnings: " . $this->earnings();
    }
}
?>
