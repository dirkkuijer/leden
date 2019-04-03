<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voice
 *
 * @ORM\Table(name="type_voice")
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


}

