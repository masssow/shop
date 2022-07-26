<?php

namespace App\DataFixtures;

use DateTimeImmutable;
use App\Entity\Produit;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProduitsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $date   = new DateTimeImmutable();
        $produit = new Produit();
        $produit->setNom('Robe ethnique pour femme');
        $produit->setSubtitle('L\'elegance à porte de main');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(4395);
        $produit->setSlug('robe-ethnique-pour-femme');
        $produit->setImageName('taibassse-vert.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_FEMME));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Robe Cleopatra');
        $produit->setSubtitle('Sprit urbaine');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(5595);
        $produit->setSlug('robe-cleopatra');
        $produit->setImageName('robe-africaine-robe-africaine-courte.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_FEMME));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Robe ample pour femme');
        $produit->setSubtitle('L\'elegance et le confort');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(4395);
        $produit->setSlug('robe-ample-pour-femme');
        $produit->setImageName('Robe-Africaine-Ample_400x.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_FEMME));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Manteau avec capuche');
        $produit->setSubtitle('Manteau gris clair');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(4395);
        $produit->setSlug('manteau-gris-avec-capuche');
        $produit->setImageName('manteau-droit-avec-capuche-gris-clair.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_FEMME));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Robe vintage');  
        $produit->setSubtitle('robe crayon vintage années 50\'s');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(4395);
        $produit->setSlug('robe-crayon-vintage');
        $produit->setImageName('robe-crayon-vintage-annee-50-4.png');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_FEMME));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Robe nanawax');  
        $produit->setSubtitle('robe nanawax marron clair');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(4395);
        $produit->setSlug('robe-nanawax');
        $produit->setImageName('nanawax-marque-aimée-africaine.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_FEMME));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Manteau coule');  
        $produit->setSubtitle('Manteau outdoor bleu grisatre');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(4395);
        $produit->setSlug('manteau-coule-outdoor');
        $produit->setImageName('outdoor-manteau-femme.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_FEMME));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Manteau Minetom');  
        $produit->setSubtitle('Manteau Minetom en laine');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(4395);
        $produit->setSlug('manteau-minetom-hiver');
        $produit->setImageName('minetom-manteau-femme.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_FEMME));
        $manager->persist($produit);

        
        $produit = new Produit();
        $produit->setNom('Manteau Coffeout');  
        $produit->setSubtitle('Manteau pour homme coffeout');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(4395);
        $produit->setSlug('manteau-coffeout-homme');
        $produit->setImageName('coffee.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_HOMME));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Pantalon Supercent');  
        $produit->setSubtitle('Pantalon Supercent pour homme');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(6500);
        $produit->setSlug('pantalon-supercent-homme');
        $produit->setImageName('pantalon-supercent.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_HOMME));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Manteau Supercent');  
        $produit->setSubtitle('Manteau Supercent pour homme');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(9999);
        $produit->setSlug('manteau-supercent-homme');
        $produit->setImageName('01W001851A.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_HOMME));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Costume sport ');  
        $produit->setSubtitle('Costume sport Geovanni');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(9999);
        $produit->setSlug('costume-geovanni-homme');
        $produit->setImageName('723374_1400_V1.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::VETEMENTS_HOMME));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Infusion Kenkeliba');  
        $produit->setSubtitle('Kenkeliba en infusion Jungle');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(9999);
        $produit->setSlug('infusion-kenkiliba');
        $produit->setImageName('infusion-kenkeliba-40g.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::BIEN_ETRE));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Thiep Khamaré');  
        $produit->setSubtitle('Thiep pourificateur d\'eau');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(9999);
        $produit->setSlug('infusion-kenkiliba');
        $produit->setImageName('khamare_700x700.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::BIEN_ETRE));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Fleurs de Bissap rouge');  
        $produit->setSubtitle('Bissap rouge Bio');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(9999);
        $produit->setSlug('bisap-rouge-bio');
        $produit->setImageName('28595-0w470h470.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::BIEN_ETRE));
        $manager->persist($produit);

        
        $produit = new Produit();
        $produit->setNom('Fleurs de Bissap rouge');  
        $produit->setSubtitle('Bissap rouge Bio');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(9999);
        $produit->setSlug('bisap-rouge-bio');
        $produit->setImageName('28595-0w470h470.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::BIEN_ETRE));
        $manager->persist($produit);

        
        $produit = new Produit();
        $produit->setNom('Beurre de karité');  
        $produit->setSubtitle('Beurre de Karité 100% bio');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(9999);
        $produit->setSlug('bisap-rouge-bio');
        $produit->setImageName('beurre-de-karite-100-pur-500ml.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::BIEN_ETRE));
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setNom('Soin de visage');  
        $produit->setSubtitle('Soin de visage Black owned');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(9999);
        $produit->setSlug('soin-de-visage-black-ouwned');
        $produit->setImageName('black-owned-business-marque.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::PRODUIT_COSMETIQUES));
        $manager->persist($produit);

        
        $produit = new Produit();
        $produit->setNom('Soins de la peau');  
        $produit->setSubtitle('Gamme Innoya soins de la peau');
        $produit->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit turpis, ullamcorper ac porttitor at.');
        $produit->setIsBest(1);
        $produit->setPrix(9999);
        $produit->setSlug('soin-de-visage-black-ouwned');
        $produit->setImageName('black-owned-business-marque.jpg');
        $produit->setImageSize(50);
        $produit->setUpdatedAt($date);
        $produit->setCategorie($this->getReference(CategorieFixtures::PRODUIT_COSMETIQUES));
        $manager->persist($produit);
        
        $manager->flush();
    }
}
