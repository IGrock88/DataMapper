<?php

namespace components\db;

use \PDO;


class DB extends AbstractDB
{

    /**
     * @var PDO $pdo
     * @return \PDO
     */
    public function connect()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        return $this->pdo = new PDO($dsn, $this->user, $this->pass, $this->options);
    }

    /**
     * @param $sql
     * @param array|null $params
     * @return array
     */
    public function getRows($sql, array $params = [])
    {
        $stmt = $this->getStatement($sql);
        if(count($params)){
            $stmt->execute($params);
        }
        else{
            $stmt->execute();
        }

        return $stmt->fetchAll();
    }
    /**
     * @param string $sql
     * @return \PDOStatement
     */
    protected function getStatement($sql)
    {
        return $this->pdo->prepare($sql);
    }

}