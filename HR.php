<?php

require_once 'AbstractAdministrationEmployee.php';

class HR extends AbstractAdministrationEmployee
{
    public static function addEmployeeToProject(AbstractProjectEmployee $employee, Project $project): void
    {
        $employee->beAssignedToProject($project);
        $project->addTeamMember($employee);
    }
}