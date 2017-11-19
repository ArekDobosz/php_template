<?php 

namespace App\Controller;

class DefaultsController {

	public function index() {
		return view('index', array(
			'hello' => 'Hello world'
		));
	}

	public function first() {
		return view('first');
	}

	public function second() {
		return view('second');
	}

}