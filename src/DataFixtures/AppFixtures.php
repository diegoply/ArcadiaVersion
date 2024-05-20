<?php

namespace App\DataFixtures;

use App\Entity\Role;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $role1 = new Role();
         $role1->setLabel('ROLE_ADMIN');
         $manager->persist($role1);

        /* $role2 = new Role();
         $role2->setLabel('ROLE_EMPLOYER');
         $manager->persist($role2);

         $role3 = new Role();
         $role3->setLabel('ROLE_VETERINAIRE');
         $manager->persist($role3);*/

        

         $manager->flush();
    }
         
}
