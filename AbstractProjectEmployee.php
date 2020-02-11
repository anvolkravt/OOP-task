<?php

require_once 'AbstractEmployee.php';

abstract class AbstractProjectEmployee extends AbstractEmployee
{
    private object $currentProject;
    private float $paymentPeriods;
    private float $rateForPeriod;
    private float $rewardForProject;

    public function __construct(string $firstName, string $lastName)
    {
        parent::__construct($firstName, $lastName);
    }

    public function setPaymentPeriods(float $paymentPeriods): void
    {
        $this->paymentPeriods = $paymentPeriods;
    }

    public function setRateForPeriod(float $rateForPeriod): void
    {
        $this->rateForPeriod = $rateForPeriod;
    }

    public function beAssignedToProject(Project $project): void
    {
        $this->currentProject = $project;
    }

    public function calculateRewardForProject(): float
    {
        $this->rewardForProject = $this->paymentPeriods * $this->rateForPeriod;
        return $this->rewardForProject;
    }
}