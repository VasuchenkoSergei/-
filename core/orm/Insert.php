<?php
namespace Core\orm;
use Core\orm\common\Connector; 

class Insert
{
    private string $tableName;
    private array $columns = [];
    private array $value = [];
    public function getColumns(): array
    {
        return $this->columns;
    }
    public function setColumns(array $columns): void 
    {
        $this->columns = $columns;
    }
    public function getTableName(): string 
    {
        return $this->gettableName;
    }
    public function setTableName(string $tableName): void 
    {
        $this->tableName = $tablename;
    }
    public function getValue(array $value): array
    {
        return $this->value;
    }
    public function setValue(array $value): void 
    {
        $this->value = $value;
    }
    public function sql(array $fields, array $values): string 
    {
        $result = '';
        foreach($values as $value)
        [
            if(empty($result)){
                $result = "'" .$value ."'";
            }else{
                $result .= ",'" .$value ."'";
            }
        ]
        return 'INSERT INTO' . $this->tableName . ' (' . implode(',' . $fields) . ') VALUES (' . $result . ')';
    }
    public function execute()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->sql($this->columns, $this->value));
    }
}