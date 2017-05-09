<?php 
use PHPUnit\Framework\TestCase;

final class ConcatTest extends TestCase
{
	private $concat;

	public function setUp()
	{
		$this->concat = new Affinity4\Concat\Concat;
	}

	public function testFilesExist()
	{
		$this->assertFileExists(__DIR__ . '/files/src/css/normailize.css');
		$this->assertFileExists(__DIR__ . '/files/src/css/style.css');
	}

	public function testInstanceOfConcat()
	{
		$this->assertInstanceOf('Affinity4\\Concat\\Concat', $this->concat);
	}

	/**
	 * @expectedException     \InvalidArgumentException
	 */
	public function testSetFileSourceThrowsInvlaidArgumentExceptionOnArray()
	{
		$this->concat->setFileSource([__DIR__ . '/files/src/css/normailize.css', __DIR__ . '/files/src/css/style.css']);
	}

	public function testSetFileSourceGetFileSources()
	{
		$source_files = [
			__DIR__ . '/files/src/css/normailize.css',
			__DIR__ . '/files/src/css/style.css'
		];

		$this->concat->setFileSource($source_files[0]);
		$this->concat->setFileSource($source_files[1]);

		$this->assertEquals($source_files, $this->concat->getFileSources());
		$this->assertEquals($source_files[0], $this->concat->getFileSources()[0]);
		$this->assertEquals($source_files[1], $this->concat->getFileSources()[1]);
	}

	public function testSetGetFileSources()
	{
		$source_files = [
			__DIR__ . '/files/src/css/normailize.css',
			__DIR__ . '/files/src/css/style.css'
		];

		$this->concat->setFileSources($source_files);

		$this->assertEquals($source_files, $this->concat->getFileSources());
		$this->assertEquals($source_files[0], $this->concat->getFileSources()[0]);
		$this->assertEquals($source_files[1], $this->concat->getFileSources()[1]);
	}
}