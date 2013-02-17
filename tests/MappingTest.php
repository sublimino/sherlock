<?php
namespace sherlock;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-02-07 at 03:12:53.
 */
class MappingTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Sherlock
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Sherlock;
		$this->object->addNode('loopback.com', '9200');
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}


	/**
	 * @covers sherlock\Sherlock::addNode
	 */
	public function testAddNode()
	{
		$ret = $this->object->addNode('loopback.com');
		$this->assertInstanceOf('\sherlock\sherlock', $ret);

	}

	function assertThrowsException($exception_name, $code) {
		$e = null;
		try{
			$code();
		}catch (\Exception $e) {
			// No more code, we only want to catch the exception in $e
		}

		$this->assertInstanceOf($exception_name, $e);
	}




	public function testMapping()
	{
		$sherlock = $this->object;

		//Set the index
		$index = $sherlock->index('test123');

		//no field, expect error
		$mapping = sherlock::mappingProperty()->String();
		$this->assertThrowsException('\sherlock\common\exceptions\RuntimeException', function () use ($mapping) {
			$data = (string)$mapping;
		});






	}

}
