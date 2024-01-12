<?php

namespace App\Models;
use DateTime;
class Product extends DatabaseLog{

    private $id;
    private $name;
    private $photos;
    private $price;
    private $description;
    private $quantity;
    private $createdAt;
    private $updatedAt;
    private $category_id; // Nouveau champ pour stocker l'id de la catégorie


    public function __construct($id, $name, $photos, $price, $description, $quantity, $createdAt, $updatedAt, $category_id){
        $this->id = $id;
        $this->name = $name;
        $this->photos = $photos;
        $this->price = $price;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->createdAt = new DateTime($createdAt);
        $this->updatedAt = new DateTime($updatedAt);
        $this->category_id = $category_id;
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

    public function getPhotos()
    {
        return $this->photos;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function getCategory_id()
    {
        return $this->category_id;
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

    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = new DateTime($createdAt);
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = new DateTime($updatedAt);
    }

    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

    

   
}