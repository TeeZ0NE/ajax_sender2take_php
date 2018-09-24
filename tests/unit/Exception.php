<?php
/**
 * Created by PhpStorm.
 * User: teez0ne
 * Date: 06.09.18
 * Time: 19:18
 */

use PHPUnit\Framework\TestCase;
use \App\Support\Exceptions\MyExceptions;
use \App\Support\Collection;
class ExceptionTestTest extends TestCase
{
	private $a;
	private $boolka;
	private $mycol;
	public function setUp()
	{
		$this->boolka = true;
		$this->a = 2;
		$this->mycol = new Collection();
}
	/**
	 * @test
	 */
	public function isInstance()
	{
		$this->assertInstanceOf(Collection::class,$this->mycol);
	}
	/**
	 * @test
	 */
	public function getException()
	{
	$this->expectException(MyExceptions::class);
	$res = $this->mycol->testExc($this->boolka);

}
}
