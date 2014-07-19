<?php

namespace AJM\CMCBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('HowMany', 'choice', array(
                  'choices'   => array(
                      'one'   => 'One',
                      'two' => 'Two',
                      'three'   => 'Three',
                      'four'   => 'Four',
                  )
            ))

            ->add('whereByTo', 'text', array('attr' => array(
                'class'=> 'ddbox'
            )
            ))
            ->add('save', 'submit', array('attr' => array(
                'class'=> 'SelectorSubmit'
            )
            ))
            ->getForm();
    }

    public function getName()
    {
        return 'task';
    }
}