<?php

use Mockery\Mock;

class HomeControllerTest extends TestCase
{
	/**
	 * @var Mock
     */
	protected $repository;

	public function setUp()
	{
		parent::setUp();
		$this->repository = Mockery::mock('App\Repositories\TableRepositoryInterface');
		$this->app->instance('App\Repositories\TableRepositoryInterface', $this->repository);
	}

	/**
	 * Test it shows the table when called
	 *
	 * @return void
	 */
	public function testShowTable()
	{
		$this->repository->shouldReceive('getData')->once()->andReturn([['foo'=>'Bar1'],['foo'=>'Bar2']]);
		$this->repository->shouldReceive('getHeaders')->once()->andReturn(['foo']);
		$this->call('GET','/');
		$this->assertResponseOk();
		$this->assertViewHas('data');
		$this->assertViewHas('headers');
	}

}
