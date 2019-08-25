<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualans extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'penjualan';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'tanggal', 'sTitle' => 'Tanggal'),
      (object) array('mData' => 'nama', 'sTitle' => 'Nama', 'name' => 'pasien.nama'),
      (object) array('mData' => 'alamat', 'sTitle' => 'Alamat', 'name' => 'pasien.alamat'),
      (object) array('mData' => 'tlp', 'sTitle' => 'No. Tlp', 'name' => 'pasien.tlp'),
      (object) array('mData' => 'total', 'sTitle' => 'Total Biaya'),
    );
    $this->form = array (
        array (
		      'name' => 'tanggal',
		      'label'=> 'Tanggal',
		      'width' => 2,
		      'attributes' => array(
		        array('data-date' => 'datepicker')
			    )),
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
		      'options' => array(),
		      'width' => 2,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'AsalPasiens'),
		        array('data-field' => 'nama')
			    )),
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
		      'options' => array(),
		      'width' => 2,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'JenisKartus'),
		        array('data-field' => 'nama')
			    )),
        array (
				      'name' => 'no_referensi_transaksi',
				      'width' => 2,
		      		'label'=> 'No. Referensi Transaksi',
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
      ->select('DATE_FORMAT(penjualan.tanggal, "%d %M %Y") tanggal', false)
      ->select('pasien.nama')
      ->select('pasien.alamat')
      ->select('pasien.tlp')
      ->select('CONCAT("Rp ", FORMAT(penjualan.total, 0)) total', false)
      ->join('pasien', 'penjualan.pasien = pasien.uuid', 'left')
      ;
    return parent::dt();
  }

}