<?php
/**
 * Created by PhpStorm.
 * User: clouduser
 * Date: 9/27/19
 * Time: 5:42 PM
 */

namespace AppBundle\Entity;


use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

}