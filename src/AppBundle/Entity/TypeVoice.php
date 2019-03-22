<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeVoice
 *
 * @ORM\Table(name="type_voice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeVoiceRepository")
 */
class TypeVoice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_voice", type="string", length=255)
     */
    private $typeVoice;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeVoice
     *
     * @param string $typeVoice
     *
     * @return TypeVoice
     */
    public function setTypeVoice($typeVoice)
    {
        $this->typeVoice = $typeVoice;

        return $this;
    }

    /**
     * Get typeVoice
     *
     * @return string
     */
    public function getTypeVoice()
    {
        return $this->typeVoice;
    }
}

