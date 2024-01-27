<?php
namespace App\Models;

use DateTime;

class Category {


    private $id;
    private $name;
    private $description;
    private $createdAt;
    private $updatedAt;

    public function __construct($id, $name, $description, $createdAt, $updatedAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->createdAt = new DateTime($createdAt);
        $this->updatedAt = new DateTime($updatedAt);
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = new DateTime($createdAt);
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = new DateTime($updatedAt);
    }
}
