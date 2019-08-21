<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PenjualanJasaDokters extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'penjualanjasadokter';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'penjualan', 'sTitle' => 'Penjualan'),

    );
    $this->form = array (
        array (
		      'name' => 'dokter',
		      'label'=> 'Dokter',
		      'options' => array(),
		      'width' => 4,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'Dokters'),
		        array('data-field' => 'nama')
			    )),
        array (
		      'name' => 'harga',
		      'label'=> 'Jasa',
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
      ->select('penjualanjasadokter.penjualan');
    return parent::dt();
  }

}