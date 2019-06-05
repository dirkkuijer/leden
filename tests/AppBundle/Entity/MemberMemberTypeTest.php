<?php 

namespace tests\AppBundle\Entity;

use AppBundle\Entity\MemberMemberType;
use PHPUnit\Framework\TestCase;


class MemberMemberTypeTest extends TestCase
{
    public function testAdd() 
  {
    $memberType = new MemberMemberType();

    $memberType->setFromDate(12021908);
    $this->afdrukken($memberType->getFromDate(), "FromDate", get_class($memberType));
    
    $datum = date("D.d.M.Y");
    $memberType->setTillDate($datum);
    $this->afdrukken($memberType->getTillDate(), "TillDate", get_class($memberType));
    
    $memberType->setReason("Testing reason");
    $this->afdrukken($memberType->getReason(), "Reason", get_class($memberType));


   }

  public function afdrukken($waarde, $veld, $klasse) 
  {
    echo "\nWaarde: " .$waarde. "   Property: ". $veld. "   Klasse: " . $klasse;
    
    if($veld == "Reason")
    {
      echo "\n EINDE KLASSE\n";
    }
  }
}