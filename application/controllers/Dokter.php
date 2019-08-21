<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends MY_Controller {

	function __construct ()
	{
		$this->model = 'Dokters';
		parent::__construct();
	}

}