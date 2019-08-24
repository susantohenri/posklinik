<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dokters extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'dokter';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'nama', 'sTitle' => 'Nama'),

    );
    $this->form = array (
        array (
				      'name' => 'nama',
				      'width' => 2,
		      		'label'=> 'Nama',
					  ),
    );
    $this->childs = array (
    );
  }

  function dt () {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('dokter.nama');
    return parent::dt();
  }

}