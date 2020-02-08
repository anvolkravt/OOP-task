<?php

require_once 'AbstractProjectEmployee.php';

class Developer extends AbstractProjectEmployee
{
    private string $qualification;

    public function __construct(string $firstName, string $lastName, int $paymentPeriods, float $rateForPeriod, string $qualification)
    {
        parent::__construct($firstName, $lastName, $paymentPeriods, $rateForPeriod);
        $this->qualification = $qualification;
    }
}