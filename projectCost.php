<?php

require_once 'setProject.php';

$projectCost = Accountant::calculateProjectCost($bigCoolProject);

echo $projectCost;