<?php

namespace HelloWorld;

use Nette\Application\UI;

class SayHallo extends UI\Control {

	public function render($title = '') {
		$this -> template -> title = $title;
		$this -> template -> render(__DIR__ . '/Test.latte');
	}

}
