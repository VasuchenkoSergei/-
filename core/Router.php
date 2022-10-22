<?php
namespace Core;
use App\Controllers\Eror;

class Router 
{
    private $exp;
    private $config = [];

    public function __construct()
    {
        $this->exp = substr($_SERVER ["REQUEST_URI"],1);
        $this->config = include_once (__DIR__) . '/../app/config/config.php';
    }

    public function run()
    {
        if (array_key_exists($this->exp, $this->config)) {
            $classPath = 'App\Controllers\\' . $this->getClassName();
        } else {
            $classPath = new Eror;
        }
        $classPath = 'App\Controllers\\' . $this->getClassName();
            if (class_exists($classPath)) {
                $obj = new $classPath;
            } else {
                $obj = new Error();
            }
            $methodName = $this->getMethodName();

            if (method_exists($obj, $methodName)) {
                $obj->$methodName();
            } else {
                (new Error)->index();
            }
    }

    private function getMethodName(): string
    {
        $exp1 = explode(':',$this->config[$this->exp]);
        return $exp1 [1];
    }

    private function getClassName(): string
    {
        $exp = explode(':',$this->config[$this->exp]);
        return $exp [0];
    }
}

?>