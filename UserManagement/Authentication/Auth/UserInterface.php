<?php
namespace UserManagement\Authentication\Auth;

Interface UserInterface
{

    function getUserName();

    function setUserName();

    function getRole();

    function setRole();

    function make();
}