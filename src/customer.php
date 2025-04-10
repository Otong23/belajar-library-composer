 <?php 
namespace Composerr\belajar;

class Custoner{

	public function __construct(private string $name)
	{
		
	}

	public function sayHello(string $name):string
	{
		return "Hello $name, my name $this->name";
	}
}


  ?>