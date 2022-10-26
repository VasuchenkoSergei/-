<?php
namespace App\Controllers;
use App\Models\Contacts
use Core\Wiev;

class Auth
{
    public function login()
    {
        $data = array_filter($_POST);
        if (!empty($data)) {
            $obj = new Contacts();
            $obj->auth($data['email'], $data['password']);
        }
        View::generate('auth/login', $data);
    }
    public function register()
    {
        $data = array_filter($_POST);
        if (!empty($data)) {
            $obj = new Contacts();
            $obj->createUser($data);
        }

        View::generate('auth/register', $data);     
    }       
}