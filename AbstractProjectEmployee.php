<?php

abstract class AbstractProjectEmployee extends AbstractEmployee
{
    private string $currentProject;

    public function assignToProject(Project $project): void
    {
        $this->currentProject = $project;
    }

    abstract protected function calculateSalary(): float;
}