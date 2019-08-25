<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PenjualanLayanans extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'penjualanlayanan';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'penjualan', 'sTitle' => 'Penjualan'),

    );
    $this->form = array (
        array (
          'name' => 'kategori',
          'label'=> 'Kategori',
          'options' => array(),
          'width' => 3,
          'attributes' => array(
            array('data-autocomplete' => 'true'),
            array('data-model' => 'KategoriLayanans'),
            array('data-field' => 'nama')
          )),
        array (
		      'name' => 'layanan',
		      'label'=> 'Layanan',
		      'options' => array(),
		      'width' => 3,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'Layanans'),
		        array('data-field' => 'nama')
			    )),
        array (
		      'name' => 'harga',
		      'label'=> 'Harga',
		      'width' => 2,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
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
      ->select('penjualanlayanan.penjualan');
    return parent::dt();
  }

}