<?php
namespace App\Models;
use Core\orm\Select;
use Core\orm\Insert;
class Contacts
{
    public function getAll(): array
    {
     $select = new Select();
     $select->setTablename('contacts');
     $data = $select->execute();
     $rows = $data->fetchAll(\PDO::FETCH_ASSOC);
     return $rows;
 
    } 
    public function createUser(array $data): void 
    {
       $objInsert = new Insert();
       $objInsert->setColumns(array_keys($data));
       $objInsert->setColumns(array_values($data));
       $objInsert->setTablename('contacts');
       $objInsert->execute();
    }
    public function auth($email, $password): bool 
    {
        $objSelect = new Select;
        $objSelect->where("email='" . $email . "' AND password = '" .$password . "'");
        $objSelect->setTablename('cotacts');
        $data = $objSelect->execute();
        $result = $data->fetchAll(\PDO::FETCH_ASSOC);
        return !empty($result);
    }
}