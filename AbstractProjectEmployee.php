<?php

require_once 'AbstractEmployee.php';

abstract class AbstractProjectEmployee extends AbstractEmployee
{
    private object $currentProject;
    private float $paymentPeriods;
    private float $rateForPeriod;
    private float $rewardForProject;

    public function __construct(string $firstName, string $lastName, float $paymentPeriods, float $rateForPeriod)
    {
        parent::__construct($firstName, $lastName);
        $this->paymentPeriods = $paymentPeriods;
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