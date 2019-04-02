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
     * @ORM\OneToMany(targetEntity="JoinMemberType", mappedBy="TypeMember")
     */
    private $member;

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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->member = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add member
     *
     * @param \AppBundle\Entity\JoinMemberType $member
     *
     * @return TypeMember
     */
    public function addMember(\AppBundle\Entity\JoinMemberType $member)
    {
        $this->member[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param \AppBundle\Entity\JoinMemberType $member
     */
    public function removeMember(\AppBundle\Entity\JoinMemberType $member)
    {
        $this->member->removeElement($member);
    }

    /**
     * Get member
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMember()
    {
        return $this->member;
    }
}
