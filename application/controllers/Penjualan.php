<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends MY_Controller {

	function __construct ()
	{
		$this->model = 'Penjualans';
		parent::__construct();
	}

}