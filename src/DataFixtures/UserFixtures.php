<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
            public const SAMBA_SOW  = 'Samba SOW';
            public const BROOKLYN_SYMMONS  = 'Brooklyn SIMMONS';
            public const JENNY_WILSON  = 'Jenny WILSON';
            public const ROBERT_FOX  = 'Robert FOX';
            public const GUY_HAWKINS  = 'Guy HAWKINS';
            public const BASSIE_COOPER  = 'Bassie COOPER';
            public const CODY_FISHER  = 'Cody FISHER';
            public const KRISTINE_WATSON  = 'Kristine WATSON';

            private $encoder;
            public function __construct(UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        //On "mémorise" le UserPasswordInterface injecté dans la propieté de la classe de sorte qu'on y aura accèes depuis toutes les méthodes de classe
        $this->encoder = $userPasswordHasherInterface;
    }

    public function load(ObjectManager $manager)
    {


        $user = new User();
        $user->setEmail('admin@admin.com');
        $plainPassword = "pass";

        $encodedPassword = $this->encoder->hashPassword($user,$plainPassword); 
        $user->setPassword($encodedPassword);
        $user->setNom('Samba');
        $user->setPrenom('SOW');
        $user->setCountry('France');
        $user->setPhone('000000000');
        $user->setEmail('samba@sow.com');
        $user->setRoles(["ROLE_USER","ROLE_ADMIN"]);// On affecte un role à l'utilisateur
        $user->setIsVerified(1);    
        $manager->persist($user);
       //SIMPLE USER
        $user = new User();
        $user->setNom('Douma');
        $user->setPrenom('Faye');
        $user->setCountry('France');
        $user->setEmail('user@user.com');
        $user->setPhone('000000000');
        $plainPassword = "pass";
        $user->setRoles(["ROLE_USER"]);// On affecte un role à l'utilisateur
        $user->setPassword($encodedPassword);

        $manager->persist($user);
        $manager->flush();


        // $user = new User();
        // $user->getId(1);
        // $user->setNom('Samba');
        // $user->setPrenom('SOW');
        // $user->setEmail('samba@sow.com');
        // $user->setPassword('pass');
        // $user->setCountry('France');
        // // $this->addReference(self::SAMBA_SOW, $user);
        // // $user->setPhone('000000000');
        // $user->setRoles(['ROLE_ADMIN','ROLE_USER']);
        // $manager->persist($user);
        // $user = new User();
        // $user->getId(2);
        // $user->setNom('Brooklyn');
        // $user->setPrenom('SIMMONS');
        // $user->setEmail('brooklyn@simmons.com');
        // $user->setPassword('pass');
        // $user->setCountry('United States');
        // // $this->addReference(self::BROOKLYN_SYMMONS, $user);
        // // $user->setPhone('000000000');
        // $user->setRoles(['ROLE_USER']);
        // $manager->persist($user);
        // $user = new User();
        // $user->setNom('Jenny');
        // $user->setPrenom('WILSON');
        // $user->setEmail('jenny@wilson.com');
        // $user->setPassword('pass');
        // $user->setCountry('Australia');
        // // $this->addReference(self::JENNY_WILSON, $user);
        // // $user->setPhone('000000000');
        // $user->setRoles(['ROLE_USER']);
        // $manager->persist($user);
        // $user = new User();
        // $user->getId(4);
        // $user->setNom('Robert');
        // $user->setPrenom('FOX');
        // $user->setEmail('fox@mail.com');
        // $user->setPassword('pass');
        // $user->setCountry('Espagne');
        // // $this->addReference(self::ROBERT_FOX, $user);
        // // $user->setPhone('000000000');
        // $user->setRoles(['ROLE_USER']);
        // $manager->persist($user);
        // $user = new User();
        // $user->getId(5);
        // $user->setNom('Guy');
        // $user->setPrenom('HAWKINS');
        // $user->setEmail('hawkins@mail.com');
        // $user->setPassword('pass');
        // $user->setCountry('Senegal');
        // // $this->addReference(self::GUY_HAWKINS, $user);
        // // $user->setPhone('000000000');
        // $user->setRoles(['ROLE_USER']);
        // $manager->persist($user);
        // $user = new User();
        // $user->getId(6);
        // $user->setNom('Cody');
        // $user->setPrenom('FISHER');
        // $user->setEmail('fisher@mail.com');
        // $user->setPassword('pass');
        // $user->setCountry('Nigeria');
        // // $this->addReference(self::CODY_FISHER, $user);
        // // $user->setPhone('000000000');
        // $user->setRoles(['ROLE_USER']);
        // $manager->persist($user);
        // $user = new User();
        // $user->getId(7);
        // $user->setNom('Bassie');
        // $user->setPrenom('COOPER');
        // $user->setEmail('bassie@mail.com');
        // $user->setPassword('pass');
        // $user->setCountry('Sweden');
        // // $this->addReference(self::BASSIE_COOPER, $user);
        // // $user->setPhone('000000000');
        // $user->setRoles(['ROLE_USER']);
        // $manager->persist($user);
        // $user = new User();
        // $user->getId(8);
        // $user->setNom('Kristine');
        // $user->setPrenom('WATSON');
        // $user->setEmail('hawkins@mail.com');
        // $user->setPassword('pass');
        // $user->setCountry('Canada');
        // // $this->addReference(self::KRISTINE_WATSON, $user);
        // // $user->setPhone('000000000');
        // $user->setRoles(['ROLE_USER']);
        // $manager->persist($user);

        // $manager->flush();
    }
}
