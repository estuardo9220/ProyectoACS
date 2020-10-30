<?php 
use PHPUnit\Framework\TestCase;
require "core/app/model/BoxData.php";

class funcionTest extends TestCase
{
	public function test_name_box()
	{
		$tablename = "box";
		$esperado = "box";

		$this->assertEquals($esperado, $tablename);
	}
	public function test_date()
	{
		$date = date("y");
		$this-> assertEquals($date, 30);

	}
	public function test_admin()
	{
		$username = "admin";
		$password = "admin";

		$this->assertEquals("admin", $username );
	}
	public function test_multiplicacion()
	{
		$multiplicacion  = 10*3;
		$esperado = 20;
		$this->assertEquals($esperado, $multiplicacion);
	}
	public function test_suma()
	{
		$suma = 4 + 2 ;
		$esperado = 6;

		$this->assertEquals($esperado, $suma);
	}

}



?>