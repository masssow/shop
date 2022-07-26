<?php

namespace App\Form;

use App\Entity\Produit;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;


class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('subtitle')
            ->add('description', CKEditorType::class)
            ->add('prix', MoneyType::class)
            ->remove('slug')
            ->add('categorie')
            ->add('isBest')
            ->add('imageFile', FileType::class, ["required"=>false])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
