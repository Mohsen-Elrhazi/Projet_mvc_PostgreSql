<?php
namespace App\Models;

class Product
{
    private int $id;
    private string $name;
    private string $image;
    private string $description;
    private float $price;

    public function __construct($name, $image, $description, $price, $id = null)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
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

    public function getImage(): string
    {
        return $this->image;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }
    public function setImage($image)
    {
        return $this->image = $image;
    }
    public function setDescription($description)
    {
        return $this->description = $description;
    }
    public function setPrice($price)
    {
        return $this->price = $price;
    }
}
?>