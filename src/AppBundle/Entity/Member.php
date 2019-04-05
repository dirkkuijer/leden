<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Member
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MemberRepository")
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
     * @ORM\OneToMany(targetEntity="MemberMemberType", mappedBy="member", cascade={"persist","remove"})
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
     * * @Assert\Email(
     *     message = "'{{ value }}' ongeldig e-mailadres",
     *     checkMX = true)
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
     * 
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
        $type->setMember($this);

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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Member
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Member
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Member
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Member
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set houseNumber
     *
     * @param string $houseNumber
     *
     * @return Member
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * Get houseNumber
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Set houseNumberAddition
     *
     * @param string $houseNumberAddition
     *
     * @return Member
     */
    public function setHouseNumberAddition($houseNumberAddition)
    {
        $this->houseNumberAddition = $houseNumberAddition;

        return $this;
    }

    /**
     * Get houseNumberAddition
     *
     * @return string
     */
    public function getHouseNumberAddition()
    {
        return $this->houseNumberAddition;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return Member
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Member
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Member
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     *
     * @return Member
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
}
