<?php
namespace App\Models;

use App\Models\Person;

class BusinessCard extends Person
{
    private string $company;
    private string $position;
    private string $address;

    public function __construct(?int $id, string $name, string $email, string $phone, string $company)
    {
        parent::__construct($id, $name, $email, $phone);
        $this->company = $company;
       
    }

    public function displayCard(): string
    {
        return "Név: {$this->name}\nEmail: {$this->getEmail()}\nTelefon: {$this->getPhone()}\nCég: {$this->company}\nPozíció: {$this->position}\nCím: {$this->address}";
    }
}

?>