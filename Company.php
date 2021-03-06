<?php

class Company
{
    private string $name;
    private array $projects = [];

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addProject(Project $project): void
    {
        array_push($this->projects, $project);
    }

    public function getProjects(): array
    {
        return $this->projects;
    }
}