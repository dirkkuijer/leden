<?php 

namespace tests\AppBundle\Entity;

use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
  
  // setting property value note: don't change property-name!
  public function testAdd() 
  {
    $user = new User();

    $user->setUsername("Dirk");
    $user->setPlainPassword("Kuijer");
    
    $this->afdrukken($user->getUsername(), "User", get_class($user));
    $this->afdrukken($user->getPlainPassword(), "User", get_class($user));
  }

  // print 
  public function afdrukken($waarde, $veld, $klasse) 
  {
    echo "\nWaarde: " .$waarde. " Property: ". $veld. " Klasse: " . $klasse;
    if($veld == "User")
    {
      echo "\n EINDE KLASSE\n";
    }
  }

}