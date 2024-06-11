<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\CustomerRole;

class MyFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $roleNames = [
            'Particulier',
            'Professionnel'
        ];

        foreach ($roleNames as $name) {
            $role = new CustomerRole();
            $role->setName($name);
            $manager->persist($role);
        }
        $manager->flush();
    }
}
