<?php
namespace App\Controllers;
use App\Models\Data;
use Core\View;

class User
{
public function index() 
{
    $obj = new Data();
    $path = 'view1';
    $data['people'] = $obj->getAll();
    View::generate($path, $data);
    
}
public function edit()
    {
        $obj-> new Data();
        $path = 'User' . DIRECTORY_SEPARATOR . 'Insert';
        View::generate($path);
    }
}
?>