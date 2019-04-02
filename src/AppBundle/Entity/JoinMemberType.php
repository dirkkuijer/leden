<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * JoinMemberType
 *
 * @ORM\Table(name="join_member_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JoinMemberTypeRepository")
 */
class JoinMemberType
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
     * @ORM\Column(name="till_date", type="date", length=255)
     */
    private $tillDate;

    /**
     * @var text
     * 
     * @ORM\Column(name="reason", type="text", length=255)
     * 
     */
    private $reason;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="MemberDate", inversedBy="type")
     * @ORM\JoinColumn(nullable=false)
     */
    private $memberDate;

    /**
     * TypeMember was eerste MemberDate.
     * @ORM\ManyToOne(targetEntity="TypeMember", inversedBy="member")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeMember;

// Getters and Setters
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
     * Set fromDate
     *
     * @param date $fromDate
     *
     * @return JoinMemberType
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * Get fromDate
     *
     * @return date
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

  /**
     * Set tillDate
     *
     * @param date $tillDate
     *
     * @return JoinMemberType
     */
    public function setTillDate($tillDate)
    {
        $this->tillDate = $tillDate;

        return $this;
    }

    /**
     * Get tillDate
     *
     * @return date
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
     * @return JoinMemberType
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
     * Get the value of MemberDate
     */ 
    public function getMemberDate()
    {
        return $this->MemberDate;
    }

    /**
     * Set the value of MemberDate
     *
     * @return  self
     */ 
    public function setMemberDate($MemberDate)
    {
        $this->MemberDate = $MemberDate;

        return $this;
    }

    /**
     * Get the value of TypeMember
     */ 
    public function getTypeMember()
    {
        return $this->TypeMember;
    }

    /**
     * Set the value of TypeMember
     *
     * @return  self
     */ 
    public function setTypeMember($TypeMember)
    {
        $this->TypeMember = $TypeMember;

        return $this;
    }
}

