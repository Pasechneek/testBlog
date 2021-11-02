<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

//use Symfony\Component\Security\Core\User\User;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

//documentation

class UserFixture extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher; //doc

    public function __construct(UserPasswordHasherInterface $passwordHasher) //doc
    {
        $this->passwordHasher = $passwordHasher;    //doc
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername('user@mail.com');
        $user->setPassword($this->passwordHasher->hashPassword(
            $user,
            'the_new_password'
        ));

        $manager->persist($user);
        $manager->flush();
    }
}
