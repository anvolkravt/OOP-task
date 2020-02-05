<?php

class HR extends AbstractAdministrationEmployee
{
    public static function addEmployeeToProject(AbstractProjectEmployee $employee, Project $project): void
    {
        $employee->assignToProject($project);
        $project->addTeamMember($employee);
    }
}