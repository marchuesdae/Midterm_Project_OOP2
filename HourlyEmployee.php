<?php
class HourlyEmployee extends Employee {
    private $hoursWorked, $rate;

    public function __construct($name, 
                                $address, 
                                $age, 
                                $companyName, 
                                $hoursWorked, 
                                $rate) 
    {
        parent::__construct($name, $address, $age, $companyName);
        $this->hoursWorked = $hoursWorked;
        $this->rate = $rate;
    }

    public function setHoursW($hoursWorked) {
        $this->hoursWorked = $hoursWorked;
    }

    public function getHoursW() {
        return $this->hoursWorked;
    }

    public function setRate($rate) {
        $this->rate = $rate;
    }

    public function getRate() {
        return $this->rate;
    }

    public function earnings() {
        if ($this->hoursWorked > 40) {
            $rate = $this->rate * 1.5;
            return (40 * $this->rate) + (($this->hoursWorked - 40) * $rate);
        }
        return $this->hoursWorked * $this->rate;
    }

    public function __toString() {
        return parent::__toString() . 
        "\nHours Worked: " . $this->hoursWorked . 
        "\nRate: " . $this->rate . 
        "\nEarnings: " . $this->earnings();
    }
}
?>
