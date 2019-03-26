<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeMember
 *
 * @ORM\Table(name="type_member")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeMemberRepository")
 */
class TypeMember
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
     * @ORM\Column(name="typeFunction", type="string", length=255)
     */
    private $typeFunction;


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
     * Set typeFunction
     *
     * @param string $typeFunction
     *
     * @return TypeMember
     */
    public function setTypeFunction($typeFunction)
    {
        $this->typeFunction = $typeFunction;

        return $this;
    }

    /**
     * Get typeFunction
     *
     * @return string
     */
    public function getTypeFunction()
    {
        return $this->typeFunction;
    }
}

