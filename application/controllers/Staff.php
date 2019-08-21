<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends MY_Controller {

	function __construct ()
	{
		$this->model = 'Staffs';
		parent::__construct();
	}

}