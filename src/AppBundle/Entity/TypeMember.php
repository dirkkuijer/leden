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
     * @ORM\Column(name="type_member", type="string", length=255)
     */
    private $typeMember;


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
     * Set typeMember
     *
     * @param string $typeMember
     *
     * @return TypeMember
     */
    public function setTypeMember($typeMember)
    {
        $this->typeMember = $typeMember;

        return $this;
    }

    /**
     * Get typeMember
     *
     * @return string
     */
    public function getTypeMember()
    {
        return $this->typeMember;
    }
}

