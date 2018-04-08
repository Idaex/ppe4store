<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity
 */
class Utilisateurs
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="motdepasse", type="string", length=255, nullable=false)
     */
    private $motdepasse;

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getMotdepasse() {
        return $this->motdepasse;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setMotdepasse($motdepasse) {
        $this->motdepasse = $motdepasse;
    }


}
