<?php
namespace App\Controllers;
use App\Models\Posts;
use Core\View;

class Admin 
{
    public function index()
    {
        $obj = new Posts();
        $path = 'view1';
        $data['people'] = $obj->getAll();
        View::generate($path, $data);
        
    }
    public function edit()
    {
            $result = array_filter($_POST);
            if (!empty($result)) {
                $obj = new Posts();
                $obj->createUser($resultgit);
            }
    
            $path = 'Admin' . DIRECTORY_SEPARATOR . 'Insert';
            View::generate($path);
    }       
}
?>