<?php
namespace App\Controllers;
use App\Models\Contacts;
use Core\View;

class Home
{
public function index() 
{
    $obj = new Contacts;
    $path = 'view1';
    $data['people'] = $obj->getAll();
    View::generate($path, $data);
    //var_dump ($obj->getAll());
}
public function admin()
    {
        return var_dump('i am home\edit');
    }
}
?>
