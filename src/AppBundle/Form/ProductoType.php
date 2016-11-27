<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('stockMinimo', null, array(
          'label' => 'Stock Minimo',
          'mapped' => true,
          'required' => true,
          'attr' => array(
            'class' => 'form-control',
            'placeholder' => 'Stock Minimo',
          )
        ))
        ->add('stockIdeal', null, array(
          'label' => 'Stock Ideal',
          'mapped' => true,
          'required' => true,
          'attr' => array(
            'class' => 'form-control',
            'placeholder' => 'Stock Ideal',
          )
        ))
        ->add('stock', null, array(
          'label' => 'Stock Actual',
          'mapped' => true,
          'required' => true,
          'attr' => array(
            'class' => 'form-control',
            'placeholder' => 'Stock Actual',
          )
        ))
        ->add('nombre', null, array(
          'label' => 'Nombre',
          'mapped' => true,
          'required' => true,
          'attr' => array(
            'class' => 'form-control',
            'placeholder' => 'Escriba un Nombre',
          )
        ))
        ->add('proveedor', null, array(
          'label' => 'Proveedor',
          'mapped' => true,
          'required' => true,
          'attr' => array(
            'class' => 'form-control',
            'placeholder' => 'Proveedor',
          )
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Producto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_producto';
    }


}
