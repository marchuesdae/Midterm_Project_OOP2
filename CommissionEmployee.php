<?php
require_once 'Employee.php';

class CommissionEmployee extends Employee {
    private $regularSalary, $itemSold, $commission_rate;

    public function __construct($name, 
                                $address, 
                                $age, 
                                $companyName, 
                                $regularSalary, 
                                $itemSold,
                                $commission_rate) 
    
    {
        parent::__construct($name, $address, $age, $companyName);
        $this->regularSalary = $regularSalary;
        $this->itemSold = $itemSold;
        $this->commission_rate = $commission_rate;
    }

    public function setRegularSalary($regularSalary) {
        $this->regularSalary = $regularSalary;
    }

    public function getRegularSalary() {
        return $this->regularSalary;
    }

    public function setItemSold($itemSold) {
        $this->itemSold = $itemSold;
    }

    public function getItemSold() {
        return $this->itemSold;
    }

    public function setCommissionRate($commission_rate) {
        $this->commission_rate = $commission_rate;
    }

    public function getCommissionRate() {
        return $this->commission_rate;
    }

    public function earnings() {
        return $this->regularSalary + ($this->itemSold * $this->commission_rate);
    }

    public function __toString() {
        return parent::__toString() .
            "\nRegular Salary : $" . $this->regularSalary .
            "\nItem Sold : " . $this->itemSold .
            "\nCommission Rate : " . $this->commission_rate .
            "\nTotal Earnings : $" . $this->earnings();
    }
}
?>
