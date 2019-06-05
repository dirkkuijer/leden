<?php 

namespace tests\AppBundle\Entity;

use AppBundle\Entity\MemberType;
use PHPUnit\Framework\TestCase;


class MemberTypeTest extends TestCase
{
  
        // setting property value. note: don't change property-name!
  public function testAdd() 
  {
      $memberType = new MemberType();
      
      $memberType->setTypeFunction("Voorzitter");
      $this->afdrukken($memberType->getTypeFunction(), "Functie", get_class($memberType));
  }
        // print 
  public function afdrukken($waarde, $veld, $klasse) 
  {
    echo "\nWaarde: " .$waarde. "   Property: ". $veld. "   Klasse: " . $klasse;
    
    if($veld == "Functie")
    {
      echo "\n EINDE KLASSE\n";
    }
  }

}