<?php defined('BASEPATH') OR exit('No direct script access allowed');

class JenisKartu extends MY_Controller {

	function __construct ()
	{
		$this->model = 'JenisKartus';
		parent::__construct();
	}

}