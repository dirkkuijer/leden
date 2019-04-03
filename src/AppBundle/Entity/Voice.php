<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voice
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VoiceRepository")
 */
class Voice
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
     * @return integer
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
     * @return Voice
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
