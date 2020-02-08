<?php

require_once 'AbstractAdministrationEmployee.php';

class Accountant extends AbstractAdministrationEmployee
{
    public static function calculateProjectCost(Project $project): float
    {
        $members = $project->getTeamMembers();
        $getProjectReward = function($member) {
            return $member->calculateRewardForProject();
        };
        return array_sum(array_map($getProjectReward, $members));
    }
}