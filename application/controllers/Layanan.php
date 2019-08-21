<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends MY_Controller {

	function __construct ()
	{
		$this->model = 'Layanans';
		parent::__construct();
	}

}