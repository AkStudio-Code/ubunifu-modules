<?php
namespace Authentication\auth;
interface XauthInterface
{

    function getUsername();

    function getUserEmail();

    function getUserSuppliedPassword();

    function getUserGroup();

    function login();


}