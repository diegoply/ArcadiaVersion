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

        $user1 = new User();
        $user1->setEmail('admin@example.com');
        $user1->setNom('admin');
        $user1->setPrenom('user');
        $user1->setPassword('$2y$13$USI8CFUdueuRAhsdpD7BK.BVODMSAXK.Yxlz6BQlAQQuiIiq4194W');
        $user1->setRole($role1);

        $manager->persist($user1);

         $manager->flush();

    }
         
}
