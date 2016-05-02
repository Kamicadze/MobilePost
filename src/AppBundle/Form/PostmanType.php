<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

/**
 * Description of PostmanType
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */
class PostmanType extends AbstractType {

  /**
   * 
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder->add('first_name', TextType::class, array(
                'constraints' => array(
                    new Length(array('min' => 3)),
                    new NotBlank()
                )
            ))
            ->add('last_name', TextType::class, array(
                'constraints' => array(
                    new Length(array('min' => 3)),
                    new NotBlank()
                )
            ))
            ->add('city', TextType::class, array(
                'constraints' => array(
                    new Length(array('min' => 3)),
                    new NotBlank()
                )
            ))
            ->add('phone', IntegerType::class, array(
                'constraints' => array(
                    new Length(array('min' => 9, 'max' => 9)),
                    new NotBlank()
                )
            ))
            ->add('email', TextType::class)
            ->add('user', UserType::class);
  }

  /**
   * 
   * @param OptionsResolver $resolver
   */
  public function configureOptions(OptionsResolver $resolver) {
    $resolver->setDefaults(array(
        'data_class' => 'AppBundle\Entity\Postman',
        'csrf_protection' => false,
        'cascade_validation' => true
    ));
  }

}
