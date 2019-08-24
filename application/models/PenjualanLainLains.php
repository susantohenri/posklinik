<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PenjualanLainLains extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'penjualanlainlain';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'penjualan', 'sTitle' => 'Penjualan'),

    );
    $this->form = array (
        array (
				      'name' => 'item',
				      'label'=> 'Item',
				      'width' => 4,
		      		'options' => array(
                array('text' => 'Administrasi & Pendaftaran', 'value' => 'Administrasi & Pendaftaran'),
                array('text' => 'Pembulatan', 'value' => 'Pembulatan'),
				      )
					  ),
        array (
		      'name' => 'harga',
		      'label'=> 'nominal',
		      'width' => 2,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
    );
    $this->childs = array (
    );
  }

  function dt () {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('penjualanlainlain.penjualan');
    return parent::dt();
  }

}