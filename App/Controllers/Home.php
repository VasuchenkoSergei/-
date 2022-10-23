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
}
public function admin()
    {
        $result = array_filter($_POST);
        if (!empty($result)) {
            $obj-> new Data();
            $obj->createUser($resultgit);
        }

        $path = 'Home' . DIRECTORY_SEPARATOR . 'Insert';
        View::generate($path);
    }
}
?>
