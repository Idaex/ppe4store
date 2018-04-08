<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits")
 * @ORM\Entity
 */
class Produits
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=150, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Descriptif", type="string", length=500, nullable=false)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="string", length=500, nullable=false)
     */
    private $image;

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getDescriptif() {
        return $this->descriptif;
    }

    function getImage() {
        return $this->image;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
    }

    function setImage($image) {
        $this->image = $image;
    }


}
