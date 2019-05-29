<?php 

namespace tests\AppBundle\Util;


use AppBundle\Entity\Member;
use AppBundle\Entity\Printen;
use PHPUnit\Framework\TestCase;
use tests\AppBundle\Entity\UserTest;


class MemberTest extends TestCase

{
    public function testInput() {
       
        $member = new Member();
        $printen = new PrintenTest();

        $member->setFirstname("Dirk");
        $printen->afdrukken($member->getFirstname(), "Voornaam", get_class($this));

        echo "printfunctie uit UserTest\n";
        $printen->afdrukken($member->getFirstname(), "Voornaam", get_class($this));
        
        $member->setLastname("Kuijer");
        $printen->afdrukken($member->getLastname(), "Achternaam" ,get_class($this));
        
        $member->setEmail("dirk@feka.nl");
        $printen->afdrukken($member->getEmail(), "Email" ,get_class($this));
        
        $member->setStreet("Straat");
        $printen->afdrukken($member->getStreet(), "Straat" ,get_class($this));
        
        $member->setHouseNumber("123");
        $printen->afdrukken($member->getHouseNumber(), "Huisnummer" ,get_class($this));
        
        $member->setCity("Vinkeveen");
        $printen->afdrukken($member->getCity(), "Woonplaats" ,get_class($this));
        
        $member->setZipCode("1234 AB");
        $printen->afdrukken($member->getZipCode(), "Postcode" ,get_class($this));
        
        $member->setTelephone("123 1234567");
        $printen->afdrukken($member->getTelephone(), "Telefoon" ,get_class($this));
        
        $member->setDateOfBirth("12-02-1980");
        $printen->afdrukken($member->getDateOfBirth(), "Geboortedatum" ,get_class($this));

    }

  
}