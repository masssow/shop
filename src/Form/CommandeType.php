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
                'required' => true,
                'class' => Adress::class,
                'choices' => $user->getAdresses(),
                'multiple' => false,
                'expanded' => true
            ])

            ->add('carriers', EntityType::class, [
                'label' => 'Transporteur:',
                'required' => true,
                'class' => Carrier::class,
                // 'choices' => $user->getAdresses(),
                'multiple' => false,
                'expanded' => true
            ])
            ->add('submit', SubmitType::class, [
               'label'=> 'valider commande',
                'attr' => [
                   'class' => 'btn btn-success float-end my-3'
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
