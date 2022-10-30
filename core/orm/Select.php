<?php
namespace Core\orm;
use Core\orm\common\Connector;
use Core\orm\Where;

class Select
{
    protected $tablename;
    protected $columns = '*';

    public function where($condition)
    {
        $this->where = new Where;
        $this->where->setWhere($condition);    
    }
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
        $sql = 'SELECT ' .$this->columns. ' FROM '. $this->tablename;
        if (!empty($this->where)){
            $sql .= $this->where->getWhere();
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