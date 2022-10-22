<?php
namespace core\orm; 

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
        return 'INSERT INTO' . $this->table . ' (' . implode(',' . $fields) . ') VALUES (' . implode(',' . $values) . ')';
    }
    public function execute()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->getSQL());
    }
}