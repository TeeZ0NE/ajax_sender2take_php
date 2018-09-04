<?php
use PHPUnit\Framework\TestCase;
class CollectionTest extends  TestCase{
	protected $collection;

	public function setUp()
	{
		$this->collection = new \App\Support\Collection();
	}

	/**
	 * @test
	 */
	public function EmptyCollection()
	{
		$this->assertEmpty($this->collection->get());
	}

	public function testCountItems()
	{
		$this->collection->set(["one","two","three"]);
		$this->assertEquals($this->collection->count(),3);

	}
	/**
	 * @test
	 */
	public function count_items()
	{
		$this->collection->set(["one","two"]);
		$this->assertCount(2,$this->collection->get());
		$this->assertEquals($this->collection->get()[0],"one");
	}

	public function testAgrigate()
	{
		$this->assertInstanceOf(IteratorAggregate::class,$this->collection)		;
	}
	/**
	 * @test
	 */
	public function can_merge()
	{
		$col1 = new \App\Support\Collection();
		$col1->set(["one","two"]);
		$col2 = new \App\Support\Collection();
		$col2->set(["three","five","six"]);
		$col = new \App\Support\Collection();
		$col1->merge($col2);

		$this->assertCount(5,$col1->get());
		$this->assertEquals(5,$col1->count());
	}

	public function testJson()
	{
		$col = new \App\Support\Collection();
		$col->set([["username"=>'billy'],["username"=>'teezone']]);
		$this->assertInternalType("string",$col->get()[0]["username"]);
		$this->assertEquals('[{"username":"billy"},{"username":"teezone"}]',$col->toJson());
	}
}