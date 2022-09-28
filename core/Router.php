<?php
/*Необходимо создать в папке core класс Router
В Router создать метод run() который будет через var_export выдавать 
свойства класса.
Необходимо подключить в index.php используя namespace класс Router*/

namespace core;

class Router 
{
    public $a= 5;
    public function run($a)
    {
        var_export ($this-> a);  
    }
    $obj = new Router;
    echo $obj->run(7);
}
?>