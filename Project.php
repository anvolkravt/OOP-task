<?php


class Project
{
    private string $projectName;
    private array $team = [];

    public function __construct(string $projectName) {
        $this->projectName = $projectName;
    }

    public function getName(): string
    {
        return $this->projectName;
    }

    public function addTeamMember(AbstractEmployee $employee): void
    {
        array_push($team, $employee);
    }

    public function getTeamMembers(): array
    {
        return $this->team;
    }
}