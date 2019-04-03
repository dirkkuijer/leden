<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MemberDate
 *
 * @ORM\Table(name="member")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MemberDateRepository")
 */
class Member
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;

     /**
     * @var int
     *
     * @ORM\OneToMany(targetEntity="JoinMemberType", mappedBy="Memberdate")
     */
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     * @Assert\NotBlank
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     * @Assert\NotBlank
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\NotBlank
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     * @Assert\NotBlank
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="houseNumber", type="string", length=255)
     * 
     */
    private $houseNumber;
    
    /**
     * @var string
     *
     * @ORM\Column(name="houseNumberAddition", type="string", length=255, nullable=true)
     * 
     */
    private $houseNumberAddition;

    /**
     * @var string
     *
     * @ORM\Column(name="zipCode", type="string", length=255)
     * @Assert\NotBlank
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     * @Assert\NotBlank
     */
    private $city;
    
    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", length=14)
     * @Assert\NotBlank
     */
    private $telephone;
    
    /**
     * @var date
     *
     * @ORM\Column(name="dateOfBirth", type="date", length=255)
     * @Assert\NotBlank
     */
    private $dateOfBirth;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->type = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add type
     *
     * @param \AppBundle\Entity\MemberMemberType $type
     *
     * @return Member
     */
    public function addType(\AppBundle\Entity\MemberMemberType $type)
    {
        $this->type[] = $type;

        return $this;
    }

    /**
     * Remove type
     *
     * @param \AppBundle\Entity\MemberMemberType $type
     */
    public function removeType(\AppBundle\Entity\MemberMemberType $type)
    {
        $this->type->removeElement($type);
    }

    /**
     * Get type
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getType()
    {
        return $this->type;
    }
}
