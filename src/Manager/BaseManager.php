<?php
namespace Model;

use App\Framework\PDOFactory;

abstract class BaseManager{

    protected $db;

    public function __construct()
    {
        $this->db = PDOFactory::getMysqlConnexion();
    }
}