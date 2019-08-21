<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualans extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'penjualan';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'pasien', 'sTitle' => 'Pasien'),

    );
    $this->form = array (
        array (
		      'name' => 'pasien',
		      'label'=> 'Pasien',
		      'options' => array(),
		      'width' => 2,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'Pasiens'),
		        array('data-field' => 'nama')
			    )),
        array (
				      'name' => 'asal_pasien',
				      'label'=> 'Asal Pasien',
				      'width' => 2,
		      		'options' => array(
                array('text' => 'Pasien Umum', 'value' => 'Pasien Umum'),
				      )
					  ),
        array (
		      'name' => 'asisten',
		      'label'=> 'Asisten',
		      'options' => array(),
		      'width' => 2,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'Staffs'),
		        array('data-field' => 'nama')
			    )),
        array (
		      'name' => 'kasir',
		      'label'=> 'Kasir',
		      'options' => array(),
		      'width' => 2,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'Staffs'),
		        array('data-field' => 'nama')
			    )),
    );
    $this->childs = array (
        array (
				      'label' => 'Jenis Layanan',
				      'controller' => 'PenjualanLayanan',
				      'model' => 'PenjualanLayanans'
					  ),
        array (
				      'label' => 'Jasa Dokter',
				      'controller' => 'PenjualanJasaDokter',
				      'model' => 'PenjualanJasaDokters'
					  ),
        array (
				      'label' => 'Obat',
				      'controller' => 'PenjualanObat',
				      'model' => 'PenjualanObats'
					  ),
        array (
				      'label' => 'Biaya Lain-Lain',
				      'controller' => 'PenjualanLainLain',
				      'model' => 'PenjualanLainLains'
					  ),
        array (
				      'label' => 'Pembayaran',
				      'controller' => 'Pembayaran',
				      'model' => 'Pembayarans'
					  ),
    );
  }

  function dt () {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('penjualan.pasien');
    return parent::dt();
  }

}