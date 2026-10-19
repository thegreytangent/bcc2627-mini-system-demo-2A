<?php

class Student extends Person
{
    public string $id_number;
    protected string $dob;

    public function __construct(string $id_number, string $firstname, string $lastname, string $dob)
    {
        $this->id_number = $id_number;
        $this->dob = $dob;
        parent::__construct($firstname, $lastname);
    }

    public function getIdNumber(): string
    {
        return $this->id_number;
    }
    public function dateOfBirth(): string
    {
        return  date('F d Y', strtotime($this->dob)); ;
    }
}
