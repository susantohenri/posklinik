<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends MY_Controller {

	function __construct ()
	{
		$this->model = 'Pembayarans';
		parent::__construct();
	}

}