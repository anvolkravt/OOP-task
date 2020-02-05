<?php

    require 'Company.php';
    require 'Project.php';
    require 'Designer.php';
    require 'Developer.php';
    require 'HTMLcoder.php';
    require 'HR.php';
    require 'Accountant.php';

    $overPowerCompany = new Company('Wow Company');
    $bigCoolProject = new Project('Very Beautiful');
    $overPowerCompany->addProject($bigCoolProject);

    $awesomeDesigner = new Designer('Garry', 'Schofield');
    $greatSeniorDeveloper = new Developer('Allan', 'Melrose', 'Senior');
    $buddingMiddleDeveloper = new Developer('Melissa', 'Hackley', 'Middle');
    $experiencedHTMLcoder = new HTMLcoder('Artur', 'Padalino');

    HR->ass

