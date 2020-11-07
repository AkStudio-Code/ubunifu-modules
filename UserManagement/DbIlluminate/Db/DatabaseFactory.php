<?php


namespace DbIlluminate\Db;

use Pixie\Connection;
use Pixie\QueryBuilder\QueryBuilderHandler;
use Illuminate\Database\Capsule\Manager as Capsule;

class DatabaseFactory
{
    protected $config;
    protected $Qb;

    function __contruct()
    {
        require '../db_config.php';
        $this->config = $db_config;
    }

    function setQueryBuilder()
    {
        return new QueryBuilderHandler($this->setCapsule());

    }

    function setCapsule()
    {
        $conn = new Connection('mysql', array(
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'ubunifu_erp',
            'username'  => 'root',
            'password'  => 'akroot',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',

        ));

      return $conn;
    }

    public function Pdo()
    {
       return $this->Datastore()->pdo();
    }

    public function Datastore()
    {
        return $this->setQueryBuilder();
    }


    function  UseIlluminateDB()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'ubunifu_erp',
            'username'  => 'root',
            'password'  => 'akroot',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

}