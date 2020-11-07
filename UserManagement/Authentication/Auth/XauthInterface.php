<?php
namespace Triposhub\Modules\UserManagement\Authentication\Auth;
interface XauthInterface
{

    function getUsername();

    function getUserEmail();

    function getUserSuppliedPassword();

    function getUserGroup();

    function login();


}