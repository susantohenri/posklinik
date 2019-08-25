<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Layanans extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'layanan';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'nama', 'sTitle' => 'Nama'),

    );
    $this->form = array (
      array (
        'name' => 'kategori',
        'label'=> 'Kategori',
        'options' => array(),
        'width' => 2,
        'attributes' => array(
          array('data-autocomplete' => 'true'),
          array('data-model' => 'KategoriLayanans'),
          array('data-field' => 'nama')
      )),
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
      ->select('layanan.nama');
    return parent::dt();
  }

}