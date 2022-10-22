<?php
namespace App\Models;
use  core\orm\Select;
class Data
{
   public function getAll(): array
   {
    $select = new Select();
    $select->setTablename('users');
    $data = $select->execut();
    $rows = $data->fetchAll(\PDO::FETCH_ASSOC);
    var_dump($rows);
    return $rows;

   } 
}