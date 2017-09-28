<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="animal_treatment")
 */
class AnimalTreatment
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
     * @var \DateTime
     * @ORM\Column(type="date", nullable=false)
     * @Assert\NotBlank
     */
    private $dateAdministered;

    /**
     * @var float
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=false)
     * @Assert\NotBlank
     */
    private $weight;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $notes;

    /**
     * @var Animal
     * @ORM\ManyToOne(targetEntity="Animal", inversedBy="treatment")
     */
    private $animal;

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
     * @return AnimalTreatment
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdministered()
    {
        return $this->dateAdministered;
    }

    /**
     * @param \DateTime $dateAdministered
     *
     * @return AnimalTreatment
     */
    public function setDateAdministered($dateAdministered)
    {
        $this->dateAdministered = $dateAdministered;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return AnimalTreatment
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     *
     * @return AnimalTreatment
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * @return Animal
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * @param Animal $animal
     *
     * @return AnimalTreatment
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }
}