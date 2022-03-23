<?php
class Grh {
    private $Employee;

    /**
     * Get the value of Employee
     */ 
    public function getEmployee()
    {
        return $this->Employee;
    }

    /**
     * Set the value of Employee
     *
     * @return  self
     */ 
    public function setEmployee(Aemployee $Employee)
    {
        $this->Employee = $Employee;

        return $this;
    }
}