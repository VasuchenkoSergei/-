<?php
namespace core\orm;

class Select
{
    protected $tablename;
    protected $columns = '*';
    public function getTablename()
    {
        return $this->tablename;
    }
    public function setTablename($tablename) : void
    {
        $this->tablename = $tablename;
    }
    public function getColumns()
    {
        return $this->columns;
    }
    public function setColumns($columns) : void
    {
        $this->columns = $columns;
    }
    public function getSQL() : string
    {
        return 'SELECT ' .$this->columns. ' FROM '. $this->tablename; 
    }
    public function execute()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->getSQL());
    }
    
}