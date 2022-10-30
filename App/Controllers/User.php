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
        $result = array_filter($_POST);
        if (!empty($result)) {
            $obj = new Data();
            $obj->createUser($resultgit);
        }

        $path = 'User' . DIRECTORY_SEPARATOR . 'Insert';
        View::generate($path);
        $path = 'User' . DIRECTORY_SEPARATOR . 'Update';
        View::generate($path);
        $path = 'User' . DIRECTORY_SEPARATOR . 'Delete';
        View::generate($path);
    }
}
?>