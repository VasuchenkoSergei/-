<?php
namespace App\Models;
use core\orm\Select;
class Posts
{
    public function getAll (): array
    {
        $select = new Select();
        $select->setTablename('posts');
        $data = $select->execut();
        $rows = $data->fetchAll(\PDO::FETCH_ASSOC);
        return $rows;
    
    } 
       public function createUser(array $data): void 
    {
          $objInsert = new Insert();
          $objInsert->setColumns(array_keys($data));
          $objInsert->setColumns(array_values($data));
          $objInsert->setTablename('posts');
          $objInsert->execute();
    }
}
