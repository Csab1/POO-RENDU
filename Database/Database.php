<?php

namespace Database;

use Config\Config;

class Database {

    protected $pdo;
    private $dbHost;
    private $dbUser;
    private $dbPassword;
    private $dbPort;
    private $dbName;

    public  function __construct()
    {
        $config =  new Config();
        $config = $config->getConfig();

        $this->dbHost = $config["dbHost"];
        $this->dbPort = $config["dbPort"];
        $this->dbName = $config["dbName"];
        $this->dbUser = $config["dbUser"];
        $this->dbPassword = $config["dbPassword"];

        $this->pdo = new \PDO('mysql:host='. $this->dbHost . ':' . $this->dbPort .
            ";dbname=" . $this->dbName ,
            $this->dbUser,
            $this->dbPassword);
    }
}

