<?php

abstract class AbstractEmployee
{
    private string $firstName;
    private string $lastName;

    public function __construct (string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}