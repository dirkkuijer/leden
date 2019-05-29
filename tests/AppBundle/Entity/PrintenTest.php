<?php 

namespace tests\AppBundle\Util;


use PHPUnit\Framework\TestCase;
use tests\AppBundle\Entity\UserTest;


class PrintenTest extends TestCase

{


  public function afdrukken($waarde, $veld, $klasse) 
        {
          echo "\n\nWaarde: " .$waarde. " Property: ". $veld. " Klasse: " . $klasse;
        }
}