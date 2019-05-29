<?php 

namespace Tests\AppBundle\Util;

use AppBundle\Entity\User;
use AppBundle\Entity\Printen;
use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
    public function testCredentials()
    {
       $user = new User();
       $printen = new PrintenTest();
   
      
        $user->setUsername('Dirk');
        $printen->afdrukken($user->getUsername(), "Username" ,get_class($this));
        
        $user->setEmail('dirk@feka.nl');
        $printen->afdrukken($user->getEmail(), "Email" ,get_class($this));
        
        $user->setPassword("1234");
        $printen->afdrukken($user->getPassword(), "Password" ,get_class($this));
      
      }
      
     
}