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
         /*$role1 = new Role();
         $role1->setLabel('role_admin');
         $manager->persist($role1);

         $role2 = new Role();
         $role2->setLabel('role_employé');
         $manager->persist($role2);

         $role3 = new Role();
         $role3->setLabel('role_veterinaire');
         $manager->persist($role3)}

        $role = $manager->getRepository(Role::class)->findOneBy(['label' => 'role_admin']);


         $user1 = new User();
         $user1->setEmail('test@admin.com')
                ->setPassword('$2y$13$gm6lRe.v3v47O3/HL1NHX.aOfiicwxtFEfvaE2HBE0NHR2SQGm5pS')
                ->setNom('Administrateur')
                ->setPrenom('Personnel')
                ->setRole($role);
        $manager->persist($user1);
        

         $manager->flush();*/

         
    }
}
