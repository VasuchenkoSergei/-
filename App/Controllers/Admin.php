<?php
namespace App\Controllers;
use App\Models\User;

class Admin implements ControllerInterface
{
    public function index()
    {
        $obj = new User;
       return var_dump($obj->getAll());
    }
    public function admin()
    {
        return var_dump('i am admin\edit');
    }
}
?>