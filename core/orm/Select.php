<?php
namespace Core\orm;
use Core\orm\common\Connector;

class Select
{
    protected $tablename;
    protected $columns = '*';
    protected $where = '';
    public function getTablename()
    {
        return $this->tablename;
    }
    public function setTablename($tablename) : void
    {
        $this->tablename = $tablename;
    }
    public function getWhere($where) 
    {
        return $this->where = $where;
    }
    public function setWhere($where) : void
    {
        $this->where = $where;
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
        $sql = 'SELECT ' .$this->columns. ' FROM '. $this->tablename;
        if (!emti($this->where)){
            $sql .= ' WHERE ' . $this->where;
        }
        return $sql;
    }
    public function execute()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->getSQL());
    }
    
}