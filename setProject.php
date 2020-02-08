<?php

    require_once 'Company.php';
    require_once 'Project.php';
    require_once 'Designer.php';
    require_once 'Developer.php';
    require_once 'HTMLcoder.php';
    require_once 'HR.php';
    require_once 'Accountant.php';

    $overPowerCompany = new Company('Wow Company');
    $bigCoolProject = new Project('Very Beautiful');
    $overPowerCompany->addProject($bigCoolProject);

    $awesomeDesigner = new Designer('Garry', 'Schofield', 1, 3000);
    $greatSeniorDeveloper = new Developer('Allan', 'Melrose', 60,10, 'Senior');
    $buddingMiddleDeveloper = new Developer('Melissa', 'Hackley', 3, 1000, 'Middle');
    $niceMiddleDeveloper = new Developer('Ethan', 'Butler', 3, 1000, 'Middle');
    $experiencedHTMLcoder = new HTMLcoder('Artur', 'Padalino', 120, 5);

    HR::addEmployeeToProject( $awesomeDesigner, $bigCoolProject);
    HR::addEmployeeToProject( $greatSeniorDeveloper, $bigCoolProject);
    HR::addEmployeeToProject( $buddingMiddleDeveloper, $bigCoolProject);
    HR::addEmployeeToProject( $niceMiddleDeveloper, $bigCoolProject);
    HR::addEmployeeToProject( $experiencedHTMLcoder, $bigCoolProject);
