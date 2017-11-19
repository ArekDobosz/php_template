<?php

function view($view, $data = array()) {
	
	extract($data);

	return require "views/{$view}.view.php";
}

function redirect($path) {

	header("Location: /{$path}");

}