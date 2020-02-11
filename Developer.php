<?php

require_once 'AbstractProjectEmployee.php';

class Developer extends AbstractProjectEmployee
{
    private string $qualification;

    public function __construct(string $firstName, string $lastName, string $qualification)
    {
        parent::__construct($firstName, $lastName);
        $this->qualification = $qualification;
    }
}