<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MemberMemberType
 *
 * @ORM\Table(name="MemberMemberType")
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
     * @ORM\ManyToOne(targetEntity="Member", inversedBy="type")
     * @ORM\JoinColumn(nullable=false)
     */
    private $member;

    /**
     * TypeMember was eerste Member.
     * @ORM\ManyToOne(targetEntity="Member", inversedBy="member")
     * @ORM\JoinColumn(nullable=false)
     */
    private $MemberType;



}

