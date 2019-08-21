<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PenjualanObats extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'penjualanobat';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'penjualan', 'sTitle' => 'Penjualan'),

    );
    $this->form = array (
        array (
		      'name' => 'obat',
		      'label'=> 'Jenis Obat',
		      'options' => array(),
		      'width' => 4,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'Obats'),
		        array('data-field' => 'nama')
			    )),
        array (
		      'name' => 'jumlah',
		      'label'=> 'Jumlah',
		      'width' => 2,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
        array (
		      'name' => 'harga',
		      'label'=> 'Harga',
		      'width' => 2,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
        array (
				      'name' => 'aturan',
				      'width' => 2,
		      		'label'=> 'Aturan',
					  ),
        array (
				      'name' => 'no_batch',
				      'width' => 3,
		      		'label'=> 'No. Batch',
					  ),
        array (
		      'name' => 'diskon',
		      'label'=> 'Diskon',
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
      ->select('penjualanobat.penjualan');
    return parent::dt();
  }

}