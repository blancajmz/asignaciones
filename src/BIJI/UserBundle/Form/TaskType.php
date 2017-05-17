<?php

namespace BIJI\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TaskType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*$builder->
            add('title')->add('description')->add('status')->add('createdAt')->add('updatedAt')->add('user');*/
        $builder
            ->add('title')
            ->add('description')
            ->add('user', EntityType::class, array(
                'class' => 'BIJIUserBundle:User',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.role = :only')
                        ->setParameter('only', 'ROLE_USER');
                },
                'choice_label' => 'getFullName'
            ))
            ->add('save', SubmitType::class, array('label' => 'Save task'))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaultOptions(array(
            'data_class' => 'BIJI\UserBundle\Entity\Task'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'task';
    }


}
