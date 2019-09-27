<?php
/**
 * Created by PhpStorm.
 * User: clouduser
 * Date: 9/27/19
 * Time: 6:25 PM
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('_username')
            ->add('_password');
    }
}