<?php

use App\Repositories\Constants\TableRepository;
use Mockery\Mock;

class TableRepositoryTest extends TestCase
{
	/**
	 * @test getData
	 * */
	function it_should_return_array_of_data()
	{
		$repo = new TableRepository();
		$data = $repo->getData();
		$this->assertTrue(is_array($data));
	}
	/**
	 * @test getHeaders
	 * */
	function it_should_give_array_of_headers()
	{
		$repo = new TableRepository();
		$headers = $repo->getHeaders(['foo'=>'Bar1','foo1'=>'Bar2']);
		$this->assertEquals(['foo','foo1'],$headers);

		$headers = $repo->getHeaders([['foo'=>'Bar1'],['foo'=>'Bar2']]);
		$this->assertEquals(['foo'],$headers);

	}

	/**
	 * @test isMultilevel
	 * */
	function it_should_tell_if_array_is_multilevel()
	{
		$repo =  new TableRepository();
		$this->assertTrue($repo->isMultilevel([['foo' => 'Bar1'], ['foo' => 'Bar2']]));
		$this->assertFalse($repo->isMultilevel(['foo' => 'Bar1','foo1' => 'Bar2']));


	}

}
