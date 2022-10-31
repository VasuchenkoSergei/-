<?php
namespace Core\orm;
use Core\orm\common\Connector;

class Delete
{
    public function sql($id): string 
    {
        return 'DELETE FROM ' . $this->tableName . "WHERE ID=$id" ;
    }
    public function execute()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->sql($this->columns, $this->value));
    }    
}