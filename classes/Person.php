<?php
class Person
{
    protected int $id;
    protected string $firstname;
    protected string $lastname;

    public function __construct(string $firstname, string $lastname, int $id)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->id = $id;
    }

    public function completeName(): string {
        return $this->lastname .", ". $this->firstname;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
