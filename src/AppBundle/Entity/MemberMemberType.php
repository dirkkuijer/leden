<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MemberMemberType
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MemberMemberTypeRepository")
 */
class MemberMemberType
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
     * @var date
     *
     * @ORM\Column(name="from_date", type="date", length=255)
     * @Assert\NotBlank
     */
    private $fromDate;

   /**
     * @var date
     *
     * @ORM\Column(name="till_date", type="date", length=255, nullable=true)
     */
    private $tillDate;

    /**
     * @var text
     * 
     * @ORM\Column(name="reason", type="text", length=255, nullable=true)
     */
    private $reason;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Member", inversedBy="type")
     * @ORM\JoinColumn(nullable=false)
     */
    private $member;

    /**
     * @ORM\ManyToOne(targetEntity="MemberType", inversedBy="member")
     * @ORM\JoinColumn(nullable=false)
     */
    private $memberType;




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
     * Set fromDate
     *
     * @param \DateTime $fromDate
     *
     * @return MemberMemberType
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * Get fromDate
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Set tillDate
     *
     * @param \DateTime $tillDate
     *
     * @return MemberMemberType
     */
    public function setTillDate($tillDate)
    {
        $this->tillDate = $tillDate;

        return $this;
    }

    /**
     * Get tillDate
     *
     * @return \DateTime
     */
    public function getTillDate()
    {
        return $this->tillDate;
    }

    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return MemberMemberType
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set member
     *
     * @param \AppBundle\Entity\Member $member
     *
     * @return MemberMemberType
     */
    public function setMember(\AppBundle\Entity\Member $member)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \AppBundle\Entity\Member
     */
    public function getMember()
    {
        return $this->member;
    }
// kan de foutmelding na het indienen van die formulier hier van daan komen? r 175.
// ongeldig argument.....
    /**
     * Set memberType
     *
     * @param \AppBundle\Entity\Member $memberType
     *
     * @return MemberMemberType
     */
    public function setMemberType(\AppBundle\Entity\MemberType $memberType)
    {
        $this->memberType = $memberType;

        return $this;
    }

    /**
     * Get memberType
     *
     * @return \AppBundle\Entity\Member
     */
    public function getMemberType()
    {
        return $this->memberType;
    }
}
