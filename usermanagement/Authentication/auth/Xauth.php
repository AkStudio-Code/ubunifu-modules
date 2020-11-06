<?php

namespace Authentication\auth;
use Authentication\validation\AuthValidate;
use Authentication\validation\UserValidation;
use DbIlluminate\Db\DatabaseFactory;
use Ubunifu\application\Request;

class Xauth implements XauthInterface
{
    protected $user;
    public function __construct(User $Obj_user)
    {
        $this ->user = $Obj_user;
    }

    /**
     * @return mixed
     */
    function getUsername()
    {
        return Request::post('user_name');
    }

    /**
     * @return mixed
     */
    function getUserEmail()
    {
        return Request::post('user_email');
    }

    /**
     * @return mixed
     */
    function getUserSuppliedPassword()
    {
        return Request::post('user_password');
    }

    /**
     * @return mixed
     */
    function getUserGroup()
    {

    }

    /**
     * @return mixed
     */
    function login() : bool
    {
       $user =  $this ->user ->getUserByUserEmail('stellexy@gmail.com');
         if(!is_null($user)){
             $auth = new AuthValidate();
             return $auth ->checkPassword('12345678',$user->first()->user_password);
         }
         return  false;
    }
}