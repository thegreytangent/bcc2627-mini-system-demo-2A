<?php

class Student extends Person
{
    public string $id_number;
    protected string $dob;

    public function __construc(string $id_number, string $firstname, string $lastname, string $dob)
    {
        $this->id_number = $id_number;
        $this->dob = $dob;
        parent::__construct($firstname, $lastname);
    }
}
