<?php 

namespace tests\AppBundle\Entity;

use AppBundle\Entity\Member;
use PHPUnit\Framework\TestCase;


class MemberTest extends TestCase
{
  
  // setting property value note: don't change property-name!
  public function testAdd() 
  {
    $member = new Member();
    $member->setFirstName("Dirk");
    $member->setLastName("Kuijer");
    $member->setEmail("dirk@feka.nl");
    $member->setStreet("De laan");
    $member->setHouseNumber(123);
    $member->setHouseNumberAddition("A");
    $member->setZipCode("1234 AB");
    $member->setCity("Mijdrecht");
    $member->setTelephone("020 1234 5678");
    $member->setDateOfBirth(12021980);
    
    $this->afdrukken($member->getFirstName(), "FirstName", get_class($member));
    $this->afdrukken($member->getLastName(), "LastName", get_class($member));
    $this->afdrukken($member->getEmail(), "E-mail", get_class($member));
    $this->afdrukken($member->getStreet(), "Street", get_class($member));
    $this->afdrukken($member->getHouseNumber(), "HouseNumber", get_class($member));
    $this->afdrukken($member->getHouseNumberAddition(), "Addition", get_class($member));
    $this->afdrukken($member->getZipCode(), "ZipCode", get_class($member));
    $this->afdrukken($member->getCity(), "City", get_class($member));
    $this->afdrukken($member->getTelephone(), "Telephone", get_class($member));
    $this->afdrukken($member->getDateOfBirth(), "Date of Birth", get_class($member));
}

  // print 
  public function afdrukken($waarde, $veld, $klasse) 
  {
    echo "\nWaarde: " .$waarde. "   Property: ". $veld. "   Klasse: " . $klasse;
    if($veld == "Date of Birth")
    {
      echo "EINDE KLASSE\n";
    }
  }

}