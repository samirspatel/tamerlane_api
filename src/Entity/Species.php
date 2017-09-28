<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="species")
 */
class Species
{
    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=false)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var Animal[]
     * @ORM\OneToMany(targetEntity="Animal", mappedBy="species")
     */
    private $animals;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Species
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return Species
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Animal[]
     */
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * @param Animal[] $animals
     *
     * @return Species
     */
    public function setAnimals($animals)
    {
        $this->animals = $animals;

        return $this;
    }
}