<?php

namespace Runa\Demo;

class Factory {

	public function build($engine) {
		
		if($engine === 'v8') {

			return new Nano($engine);

		} else if($engine === 'v10') {

			return new Ford($engine);

		} else {

			return null;
		}
	}
}