<?php
namespace Core;
use App\Controllers\Home;

class Router 
{
    public $a;
    public function run($name)
    {
        echo '<pre>';
        var_dump($_SERVER["REQUEST_URL"]);
        echo '</pre>';
    
$str = substr($_SERVER["REQUEST_URL"],1);
$exp = (explode("/",$str));

if (empty($exp(0))) 
{
    $className = 'Admin';
}
else 
{
    $className = $exp[0];
}
$classPath = 'App\Controllers\\'.$className;
if (class_exists($classPath))
{
    $obj = new $classPath;
}
else 
{
    $obj = new Home;
}
    }
   $obj->index(); 
}
?>