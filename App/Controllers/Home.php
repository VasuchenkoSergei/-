<?php
namespace App\Controllers;
use App\Models\Contacts;
use Core\View;

class Home
{
public function index() 
{
    $obj = new Contacts();
    $path = 'view1';
    $data['people'] = $obj->getAll();
    View::generate($path, $data);
}
public function edit()
    {
        $result = array_filter($_POST);
        if (!empty($result)) {
            $obj = new Contacts();
            $obj->createUser($resultgit);
        }

        $path = 'Home' . DIRECTORY_SEPARATOR . 'Insert';
        View::generate($path);
        $path = 'Home' . DIRECTORY_SEPARATOR . 'Update';
        View::generate($path);
        $path = 'Home' . DIRECTORY_SEPARATOR . 'Delete';
        View::generate($path);
    }
}
?>
