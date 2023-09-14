<?php

namespace App\Form;

use App\Entity\Adress;
use App\Entity\Carrier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $user = $options['user'];
        $builder
            ->add('adresses', EntityType::class, [
                'label' => 'Votre adresse de livraison:',
                // 'attr'  => [
                //     'class' => 'chose-shipping'
                // ],
                'required' => true,
                'class' => Adress::class,
                'choices' => $user->getAdresses(),
                'multiple' => false,
                'expanded' => true
            ])

            ->add('carriers', EntityType::class, [
                'label' => 'Transporteur:',
                // 'attr'  => [
                //     'class' => 'chose-shipping'
                // ],
                'required' => true,
                'class' => Carrier::class,
                // 'choices' => $user->getAdresses(),
                'multiple' => false,
                'expanded' => true
            ])
            ->add('submit', SubmitType::class, [
               'label'=> 'valider commande',
                'attr' => [
                   'class' => 'primary-btn chechout-btn'
               ] 
               ]);
            
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'user' => array()
        ]);
    }
}
