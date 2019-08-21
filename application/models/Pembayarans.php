<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayarans extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'pembayaran';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'penjualan', 'sTitle' => 'Penjualan'),

    );
    $this->form = array (
        array (
				      'name' => 'jenis_pembayaran',
				      'label'=> 'Jenis Pembayaran',
				      'width' => 3,
		      		'options' => array(
                array('text' => 'Tunai', 'value' => 'Tunai'),
                array('text' => 'Kartu', 'value' => 'Kartu'),
				      )
					  ),
        array (
				      'name' => 'jenis_kartu',
				      'label'=> 'Jenis Kartu',
				      'width' => 3,
		      		'options' => array(
				      )
					  ),
        array (
				      'name' => 'no_kartu',
				      'width' => 4,
		      		'label'=> 'No. Kartu',
					  ),
    );
    $this->childs = array (
    );
  }

  function dt () {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('pembayaran.penjualan');
    return parent::dt();
  }

}