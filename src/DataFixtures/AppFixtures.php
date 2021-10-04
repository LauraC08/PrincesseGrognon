<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{

    private function createUser($userName, $email, $password){
        $user = new User();
        $user->setUserName($userName);
        $user->setEmail($email);
        $user->setPassword($password);

        return $user;
    }
    
    public function load(ObjectManager $manager)
    {
        $user1 = $this->createUser("lulu","lulu@live.fr", "lulu");
        $manager->persist($user1);

        $user2 = $this->createUser("steph","steph@live.fr", "steph");
        $manager->persist($user2);

        $user3 = $this->createUser("bidul","bidul@live.fr", "bidul");
        $manager->persist($user3);

        $manager->flush();
    }
}
