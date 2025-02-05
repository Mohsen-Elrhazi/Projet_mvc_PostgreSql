<?php
namespace App\Models;

class Categorie
{
    private int $id;
    private string $name;

    public function __construct($name, $id = null)
    {
        $this->name = $name;
        $this->id = $id;
    }

    public function getID(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }
}
?>