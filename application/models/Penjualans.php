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
		      'name' => 'dokter',
		      'label'=> 'Dokter',
		      'options' => array(),
		      'width' => 2,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'Dokters'),
		        array('data-field' => 'nama')
			    )),
        array (
		      'name' => 'jasa_dokter',
		      'label'=> 'Jasa Dokter',
		      'width' => 2,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
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
        array (
				      'name' => 'jenis_pembayaran',
				      'label'=> 'Jenis Pembayaran',
				      'width' => 2,
		      		'options' => array(
                array('text' => 'Tunai', 'value' => 'Tunai'),
                array('text' => 'Kartu', 'value' => 'Kartu'),
				      )
					  ),
        array (
				      'name' => 'jenis_kartu',
				      'label'=> 'Jenis Kartu',
				      'width' => 2,
		      		'options' => array(
				      )
					  ),
        array (
				      'name' => 'no_kartu',
				      'width' => 2,
		      		'label'=> 'No. Kartu',
					  ),
        array (
		      'name' => 'total',
		      'label'=> 'Total',
		      'width' => 2,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
        array (
		      'name' => 'dibayar',
		      'label'=> 'Dibayar',
		      'width' => 2,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
        array (
		      'name' => 'kembali',
		      'label'=> 'Kembali',
		      'width' => 2,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
    );
    $this->childs = array (
        array (
				      'label' => 'Jenis Layanan',
				      'controller' => 'PenjualanLayanan',
				      'model' => 'PenjualanLayanans'
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