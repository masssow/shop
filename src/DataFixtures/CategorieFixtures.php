<?php

namespace App\DataFixtures;

use DateTimeImmutable;
use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategorieFixtures extends Fixture
{
    public const VETEMENTS_FEMME        = 'Vetements Femme';
    public const VETEMENTS_HOMME        = 'Vetements Homme';
    public const VETEMENTS_ENFANT      = 'Vetements enfant';
    public const PRODUIT_COSMETIQUES    = 'Produit cosmetiques';
    public const ACCESOIRES             = 'Accesoires';
    public const BIEN_ETRE              = 'Bien être';
    public const PROMOTION              = 'Promotions';
    public function load(ObjectManager $manager)
    {
        $date = new DateTimeImmutable();
        $categorie = new Categorie();
        $categorie->setNom('Vetemenent Femme');
        $categorie->setImageName('girl-1848947_640.jpg');
        $categorie->setImageSize(50);
        $categorie->setUpdatedAt($date);
        $this->addReference(self::VETEMENTS_FEMME ,$categorie);
        $manager->persist($categorie);
        $date = new DateTimeImmutable();
        $categorie = new Categorie();
        $categorie->setNom('Vetemenent Homme');
        $categorie->setImageName('coffee_outfit__20191121_144021.jpg');
        $categorie->setImageSize(50);
        $categorie->setUpdatedAt($date);
        $this->addReference(self::VETEMENTS_HOMME ,$categorie);
        $date = new DateTimeImmutable();
        $categorie = new Categorie();
        $categorie->setNom('Vetemenent Enfant');
        $categorie->setImageName('categorie_enfant.jpg');
        $categorie->setImageSize(50);
        $categorie->setUpdatedAt($date);
        $this->addReference(self::VETEMENTS_ENFANT,$categorie);
        $manager->persist($categorie);
        $date = new DateTimeImmutable();
        $categorie = new Categorie();
        $categorie->setNom('Produit Cosmetiques');
        $categorie->setImageName('10-soins-visage-et-corps-pour-sublimer-ma-peau.jpg');
        $categorie->setImageSize(50);
        $categorie->setUpdatedAt($date);
        $this->addReference(self::PRODUIT_COSMETIQUES ,$categorie);
        $manager->persist($categorie);
        $date = new DateTimeImmutable();
        $categorie = new Categorie();
        $categorie->setNom('Accesoires');
        $categorie->setImageName('gadgets.jpg');
        $categorie->setImageSize(50);
        $categorie->setUpdatedAt($date);
        $this->addReference(self::ACCESOIRES ,$categorie);
        $manager->persist($categorie);
        $date = new DateTimeImmutable();
        $categorie = new Categorie();
        $categorie->setNom('Bien être');
        $categorie->setImageName('appar-1850804_640.jpg');
        $categorie->setImageSize(50);
        $categorie->setUpdatedAt($date);
        $this->addReference(self::BIEN_ETRE ,$categorie);
        $manager->persist($categorie);
        $date = new DateTimeImmutable();
        $categorie = new Categorie();
        $categorie->setNom('Promotion');
        $categorie->setImageName('girl-1848947_640.jpg');
        $categorie->setImageSize(50);
        $categorie->setUpdatedAt($date);
        $this->addReference(self::PROMOTION ,$categorie);
        $manager->persist($categorie);

        $manager->persist($categorie);


        $manager->flush();
    }
}
