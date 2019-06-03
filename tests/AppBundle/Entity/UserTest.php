<?php 

namespace Tests\AppBundle\Entity;

use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
  public function tering() 
  {
    $user = new User;

    echo "". get_class_vars($user);

    $user->setUsername("Test");
    $this->afdrukken($user->getUsername(), "Data: ", get_class($this));
  }

   public function afdrukken($waarde, $veld, $klasse) 
        {
          echo "\nWaarde: " .$waarde. " Property: ". $veld. " Klasse: " . $klasse;
        }
}