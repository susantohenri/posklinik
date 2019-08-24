<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends MY_Controller {

	function __construct ()
	{
		$this->model = 'Pasiens';
		parent::__construct();
	}

}