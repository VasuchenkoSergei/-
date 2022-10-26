<?php
namespace App\Models;
use  Core\orm\Select;
use Core\orm\Insert;

class Data
{
   public function getAll(): array
   {
    $select = new Select();
    $select->setTablename('users');
    $data = $select->execute();
    $rows = $data->fetchAll(\PDO::FETCH_ASSOC);
    return $rows;

   } 
   public function createUser(array $data): void 
   {
      $objInsert = new Insert();
      $objInsert->setColumns(array_keys($data));
      $objInsert->setColumns(array_values($data));
      $objInsert->setTablename('users');
      $objInsert->execute();
   }
}