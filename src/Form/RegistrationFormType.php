<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\IntegerType;
use Doctrine\ORM\Mapping\Driver\RepeatableAttributeCollection;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nom', TextType::class, [
                'label' => "Nom",
                'attr'  => [
                ]
            ])
            ->add('prenom', TextType::class, [
                'label' => "Prénom",
                'attr'  => [
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail',
                'attr'  => [
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'numero de telephone',
                'attr'  => [
                ]
            ])
            ->remove('roles')
            ->add('country', CountryType::class, [
                'label'=> 'Pays',
                'attr' => [
                    'placeholder' => ''
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message'=> 'Le mot de passe et la confirmation doivent être identique.',
                'label'          => 'Votre mot de passe',
                'required'       => true,
                'first_options'   =>
                    ['label'=> 'Mot de passe'],
                'second_options'  =>
                    ['label' => 'Confirmez votre mot de passe']
            
                
            ]);
                   /* ->add('nom')
                    ->add('prenom')
                    ->add('email')
                    ->add('phone')
                    ->remove('roles')
                    ->add('password');
                    */
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
