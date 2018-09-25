<?php

namespace components\db;
use \PDO;

abstract class AbstractDB
{
    /**
     * @var PDO $pdo
     */
    protected $pdo;
    protected $host = '127.0.0.1';
    protected $db = 'datamapper';
    protected $user = 'root';
    protected $pass = 'root';
    protected $charset = 'utf8';
    protected $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    /**
     * @return \PDO
     */
    abstract public function connect();

    /**
     * @param $sql
     * @param array|null $params
     * @return array
     */
    abstract public function getRows($sql, array $params = []);
    /**
     * @param string $sql
     * @return \PDOStatement
     */
    abstract protected function getStatement($sql);

}