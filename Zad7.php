<?php
// Создать родительский класс с 2 свойствами с геттерами и сеттерами
и содержать абстрактную функцию возведения в степень
class A 
{
    public  $a=3;
    public function getBar()
    {
        return $this->a;
    }

    public function setBar($a)
    {
        $this->a = $a;
        }
    public  $b=6;
    public function getBar1()
    {
        return $this->b;
    }

    public function setBar1($b)
    {
        $this->b = $b;
    }

    public function square($num) {
   $square = $num * $num;
   return $square;
}	
}
// Создать 3 наследника родительского класса  с одним свойством 
Каждый наследник должен содержать одно свойство
Каждое свойство должно иметь геттер и сеттер
Наследники должны реализовать по одному методу который выполняет одно
 математическое действие с данными родителя и своими данными
Один наследник не должен быть наследуемым

class B extends A {
    public $c;
    public function getBar2()
    {
        return $this->c;
    }

    public function setBar2($c)
    {
        $this->c = $c;
        }

    public function f1($c) {
    return $this->b+$c;
    }
}
$obj = new B;
$obj1 = new B;
echo $obj->f1()+$obj1->square();

class C extends A {
    public $d;
    public function getBar3()
    {
        return $this->d;
    }

    public function setBar2($c)
    {
        $this->d = $d;
        }
    public function f2($d) {
     return $this->b/$d;
     }

}
$obj2 = new C;
$obj3 = new C;
echo $ob2j->f2()+$obj3->square();
// ненаследуемый класс
final class S extends A {
    public $e;
    public function getBar3()
    {
        return $this->e;
    }

    public function setBar3($e)
    {
        $this->e = $e;
        }
    public function f3($e) {
     return $this->b*$c;
     }

}
$obj4 = new C;
$obj5 = new C;
echo $obj4->f3()+$obj5->square();

//Создать по 2 наследника от наследников первого уровня
Каждое свойство должно иметь геттер и сеттер
Наследники должны реализовать по одному методу который выполняет
одно математическое действие с данными родителя и своими данными
И по одному методу который выполняет любое математическое действие
 со свойством корневого класса и своим свойством

В случае если реализован наследник класса содержащего абстрактную
 функцию то класс должен содержать реализацию абстракции

class X extends B {
    public $g;
    public function getBar4()
    {
        return $this->g;
    }

    public function setBar4($g)
    {
        $this->g = $g;
        }
        public function f4($g) {
     return $this->c*$g;
     }
     public function f5($g) {
     return $this->a*$g;
     }
return $square(9);
}
$obj6 = new X;
$obj7 = new X;
$obj8 = new X;
echo $obj6->f4()+$obj7->square()+$obj8->f5();

class Z extends C {
    public $h;
    public function getBar5()
    {
        return $this->h;
    }

    public function setBar5($cr)
    {
        $this->h = $h;
        }
        public function f6($h) {
     return $this->d/$h;
     }
     public function f7($h) {
     return $this->b*$h;
     }

}
$obj9 = new Z;
$obj10 = new Z;
$obj11 = new Z;
echo $obj9->f6()+$obj10->square()+$obj11->f7();
?>