<?php
namespace Authentication\auth;
use Authentication\validation\AuthValidate;
use Authentication\validation\UserValidation;
use DbIlluminate\Db\DatabaseFactory;

class User implements UserInterface
{
    protected $IllDB;
    function __construct(\DbIlluminate\Db\DatabaseFactory $DB)
    {
        $this ->IllDB = $DB;
    }
    /**
     * @return mixed
     */
    function getUserName()
    {

    }

    /**
     * @return mixed
     */
    function setUserName()
    {
        // TODO: Implement setUserName() method.
    }

    /**
     * @return mixed
     */
    function getRole()
    {
        // TODO: Implement getRole() method.
    }

    /**
     * @return mixed
     */
    function setRole()
    {
        // TODO: Implement setRole() method.
    }

    /**
     * @return mixed
     */
    function make()
    {
        // TODO: Implement make() method.
    }

    function getUserByUserEmail($user_email)
    {
        $user_validation = new UserValidation(new DatabaseFactory());
        $user = $user_validation ->getUser($user_email);
        if($user_validation ->checkIfUserExists($user)){
            return  $user;
        }
        return null;
    }

}