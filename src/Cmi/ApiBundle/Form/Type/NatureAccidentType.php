<?php
# src/CmiApiBundle/Form/Type/NatureAccidentType.php

namespace Cmi\ApiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NatureAccidentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('naCode');
        $builder->add('naLibelle');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'Cmi\ApiBundle\Entity\NatureAccident',
            'csrf_protection' => false
        ]);
    }
}