<?php

require_once 'AbstractEmployee.php';

class AbstractAdministrationEmployee  extends AbstractEmployee
{
    private float $monthlySalary;

    public function __construct(string $firstName, string $lastName, float $monthlySalary)
    {
        parent::__construct($firstName, $lastName);
        $this->monthlySalary = $monthlySalary;
    }
}