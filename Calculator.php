<?php

class Calculator
{
	public $total;

	public function add($n,$arr)
	{
		for($i=0;$i<=$n;$i++)
		{	
			$this->total+=$arr[$i];
		
		}
	}
	
	public function sub($n,$arr)
	{
		$this->total=$arr[0];

		for($i=1;$i<=$n;$i++)
		{	
			$this->total=$this->total-$arr[$i];
		
		}
	}
	public function product($n,$arr)
	{
		$this->total=$arr[0];

		for($i=1;$i<=$n;$i++)
		{	
			$this->total=$this->total*$arr[$i];
		
		}
	}
	public function quotient($n,$arr)
	{
		$this->total=$arr[0];

		for($i=1;$i<=$n;$i++)
		{	
			if($arr[$i]!=0)
			{
				$this->total=$this->total/$arr[$i];
			}
			else
			{
				$this->total="Division by zero.";
			}
		
		}
	}
	public function getTotal($result)
	{
		echo $result.":".$this->total;
	}
}
?>