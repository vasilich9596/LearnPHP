<?php 
abstract class A
{
	public $a = 3;
	public $b = 6;

	public function getBar()
	{
		return $this -> a;
	}

	public function setBar($a)
	{
		$this -> a = $a;

	}
	

	public function getBar1()
	{
		return $thid -> b;

	}
	public function setBar1($b)
	{
		$this -> b = $b;
	}
	abstract public function square($num);

	/*{
		$square = $num *$num;
		return $square;
	}*/
}
class B extends A
{
	public $c;
	public function getBar2()
	{
		return $this -> c;
	}

	public function setBar2($c)
	{
		$this -> c = $c;
	}

	public function f1($c)
	{
		return $this -> b +$c;

	}

	public function square($num)
	{
		$square = $num * $num;
		return $square;
	}

}
$obj = new B;
echo $obj ->f1(4)+ $obj -> square(8);


class C extends A
{
	public $d;
	public function getBar3()
	{
		return $this -> d;
	}

	public function setBar2($c)
	{
		$this ->d = $d;
	}
		public function f2($d)
		{
			return $this -> b / $d;
		}

		public function square ($num)
		{
		$square =$num * $num;
		return $square;
	}
}
$obj1 = new C;
echo $obj1 ->f2(5) + $obj1 ->square(6);

final class S extends A
{
	public $e;
	public function getBar3()
	{
		return $this ->e;
	}

	public function setBar3($S)
	{
		$this -> e = $e;
	}

	public function f3($e)
	{
		return $this -> b *$c;
	}

	public function square ($num)
	{
		$square =$num *$num;
		return $square;
	}
}
$obj2 = new S;
echo $obj2 -> f3(5) + $obj2 -> square(6);

class P extends B
{	
	public $x;
	public function setBar4($p)
	{
		$this -> x =$x;
	}
	public function getBar4()
	{
		return $this -> x;
	}
	public function f4($x)
	{
		return $this -> b - $x;
	}
	public function f7($x)
	{
		return $this -> a * $x;
	}

	public function square ($num)
	{
 		$square =$num *$num;
		return $square;
	}
}
$obj4 = new P;
echo $obj4 -> f4(3) + $obj4 -> square(6) + $obj4 -> f7(5);

class K extends C
{
	public $m;
	public function setBar5($m)
	{
		$this -> m =$m;
	}
	public function getBar5()
	{
		return $this -> m;
	}
	public function f5($m)
	{
		return $this -> c - $m;
	}

	public function f6($m)
	{
		return $this ->a *$m;
	}
	public function square ($num)
	{
		$square =$num *$num;
		return $square;
	}
}
$obj3 = new K;
echo $obj3 -> f5(3) + $obj3 -> square(6) + $obj3 ->f6(7);
