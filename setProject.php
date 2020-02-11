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

    $awesomeDesigner = new Designer('Garry', 'Schofield');
    $greatSeniorDeveloper = new Developer('Allan', 'Melrose', 'Senior');
    $buddingMiddleDeveloper = new Developer('Melissa', 'Hackley', 'Middle');
    $niceMiddleDeveloper = new Developer('Ethan', 'Butler', 'Middle');
    $experiencedHTMLcoder = new HTMLcoder('Artur', 'Padalino');

    HR::addEmployeeToProject( $awesomeDesigner, $bigCoolProject);
    HR::setPediodsAndPaymentsForEmployee($awesomeDesigner, 1, 3000);
    HR::addEmployeeToProject( $greatSeniorDeveloper, $bigCoolProject);
    HR::setPediodsAndPaymentsForEmployee($greatSeniorDeveloper, 60, 10);
    HR::addEmployeeToProject( $buddingMiddleDeveloper, $bigCoolProject);
    HR::setPediodsAndPaymentsForEmployee($buddingMiddleDeveloper, 3, 1000);
    HR::addEmployeeToProject( $niceMiddleDeveloper, $bigCoolProject);
    HR::setPediodsAndPaymentsForEmployee($niceMiddleDeveloper, 3, 1000);
    HR::addEmployeeToProject( $experiencedHTMLcoder, $bigCoolProject);
    HR::setPediodsAndPaymentsForEmployee($experiencedHTMLcoder, 120, 5);
