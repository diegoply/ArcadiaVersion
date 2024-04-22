<?php

namespace App\DataFixtures;

use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $role1 = new Role();
         $role1->setLabel('role_admin');
         $manager->persist($role1);

         $role2 = new Role();
         $role2->setLabel('role_employé');
         $manager->persist($role2);

         $role3 = new Role();
         $role3->setLabel('role_veterinaire');
         $manager->persist($role3);

         $manager->flush();
    }
}
