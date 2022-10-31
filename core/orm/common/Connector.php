<?php
namespace Core\orm\common;
use PDO;
class Connector
{
    private $dsn;
    private $username;
    private $password;
    public function __construct()
    {
        $params = include(__DIR__) . '/../config/param.php';
        $host = $params['host'] ?? '';
        $dbname = $params['dbname'] ?? '';
        $this->dsn = 'mysql:host=' . $host .';dbname='. $dbname;
        $this->username = $params['username'] ?? '';
        $this->password = $params['password'] ?? '';
        var_dump($this->dsn);
    }
    public function connect()
    {
        return new PDO($this->dsn, $this->username, $this->password);
    }

}