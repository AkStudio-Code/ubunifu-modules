<?php

namespace Authentication\validation;
use Authentication\auth\User;
use DbIlluminate\Db\DatabaseFactory;
use Illuminate\Database\Capsule\Manager;

class UserValidation extends User
{
    function __construct(DatabaseFactory $DB)
    {
        parent::__construct($DB);
        $this->IllDB->UseIlluminateDB();
    }

    public function checkIfUserExists($user): bool
    {
        return !is_null($user->first());
    }

    public function getUser($user_email)
    {
        return Manager::table('users')->get()->where('user_email', '=', $user_email);
    }


}