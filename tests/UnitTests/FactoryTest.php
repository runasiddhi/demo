<?php
require_once __DIR__.'/../../vendor/autoload.php';

use Runa\Demo\Factory;

class FactoryTest extends PHPUnit_Framework_TestCase {

	public function test_build() {

		$factory = new Factory();

		$result_object = $factory->build('v8');


		$this->assertInstanceOf("Runa\Demo\Nano",$result_object);
	}
}