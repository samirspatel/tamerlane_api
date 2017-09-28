<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ApiResource()
 *
 * @ORM\Entity()
 * @ORM\Table(name="animal")
 */
class Animal
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
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
     * @var Species
     * @Assert\NotBlank
     * @ORM\ManyToOne(targetEntity="Species", inversedBy="animals")
     */
    private $species;

    /**
     * @var string
     * @ORM\Column(name="animal_condition", type="text", nullable=true)
     */
    private $condition;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $tag;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=false)
     * @Assert\NotBlank
     */
    private $origin;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $birthDate;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     * @Assert\NotBlank
     */
    private $intakeDate;

    /**
     * @var Picture
     * @ORM\OneToMany(targetEntity="AnimalPicture", mappedBy="animal")
     */
    private $picture;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $notes;

    /**
     * @var AnimalTreatment[]
     * @ORM\OneToMany(targetEntity="AnimalTreatment", fetch="EAGER", mappedBy="animal", orphanRemoval=true)
     */
    private $treatments;

    public function __construct()
    {
        $this->intakeDate = new \DateTime();
    }

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
     * @return Animal
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Animal
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Species
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * @param Species $species
     *
     * @return Animal
     */
    public function setSpecies($species)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param string $condition
     *
     * @return Animal
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     *
     * @return Animal
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     *
     * @return Animal
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param \DateTime $birthDate
     *
     * @return Animal
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIntakeDate()
    {
        return $this->intakeDate;
    }

    /**
     * @param \DateTime $intakeDate
     *
     * @return Animal
     */
    public function setIntakeDate($intakeDate)
    {
        $this->intakeDate = $intakeDate;

        return $this;
    }

    /**
     * @return Picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param Picture $picture
     *
     * @return Animal
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

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
     * @return Animal
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * @return AnimalTreatment[]
     */
    public function getTreatments()
    {
        return $this->treatments;
    }

    /**
     * @param AnimalTreatment[] $treatments
     *
     * @return Animal
     */
    public function setTreatments($treatments)
    {
        $this->treatments = $treatments;

        return $this;
    }
}