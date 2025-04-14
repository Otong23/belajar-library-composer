<?php 

namespace Composer\Belajar;

class Customer{

	public function __construct(private string $name)
	{
		
	}

	public function sayHello(string $name = "Guest"):string
	{
		return "Hello $name, my name $this->name";
	}
}


  ?>
