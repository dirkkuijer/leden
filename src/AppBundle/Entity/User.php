<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
   
    /**
     * @Assert\Length(min=10, minMessage = "Minimaal 10 karakters invullen aub.")
     */
    protected $plainPassword;


     /**
     * @ORM\Column(type="boolean")
     */
    protected $system = false;

    public function __construct()
    {
        parent::__construct();
        
    }

    /**
     * Get the value of system
     */ 
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Set the value of system
     *
     * @return  self
     */ 
    public function setSystem($system)
    {
        $this->system = $system;

        return $this;
    }
    
}
