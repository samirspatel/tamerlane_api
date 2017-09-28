<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource()
 *
 * @ORM\Entity()
 * @ORM\Table(name="animal_picture")
 */
class AnimalPicture
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
     * @var Animal
     * @ORM\ManyToOne(targetEntity="Animal", inversedBy="picture")
     */
    private $animal;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=false)
     * @Assert\NotBlank
     */
    private $url;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=false)
     * @Assert\NotBlank
     */
    private $fileName;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $dateCreated;

    public function __construct()
    {
        $this->dateCreated = new \DateTime();
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
     * @return Picture
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * @return AnimalPicture
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Picture
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     *
     * @return Picture
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param \DateTime $dateCreated
     *
     * @return Picture
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }
}