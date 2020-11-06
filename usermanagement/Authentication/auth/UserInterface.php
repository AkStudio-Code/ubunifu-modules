<?php
namespace Authentication\auth;

Interface UserInterface
{

    function getUserName();

    function setUserName();

    function getRole();

    function setRole();

    function make();
}