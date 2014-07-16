<?php

namespace Runa\Demo;

class Ford {

	private $engine;

	public function __construct($engine){

		$this->engine = $engine;
	}

	public function get_engine() {

		if($this->engine) {
			return $this->engine;
		}
	}
}