<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pasiens extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'pasien';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'nama', 'sTitle' => 'Nama'),
      (object) array('mData' => 'alamat', 'sTitle' => 'Alamat'),
      (object) array('mData' => 'no_rm', 'sTitle' => 'No. RM'),
    );
    $this->form = array (
        array (
				      'name' => 'no_rm',
				      'width' => 2,
		      		'label'=> 'No. RM',
					  ),
        array (
				      'name' => 'nama',
				      'width' => 2,
		      		'label'=> 'Nama Pasien',
					  ),
        array (
				      'name' => 'alamat',
				      'width' => 2,
		      		'label'=> 'Alamat',
					  ),
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
				      'name' => 'kepala_keluarga',
				      'width' => 2,
		      		'label'=> 'Kepala Keluarga',
					  ),
        array (
				      'name' => 'status_pasien',
				      'label'=> 'Status Pasien',
				      'width' => 2,
		      		'options' => array(
                array('text' => 'Pegawai', 'value' => 'Pegawai'),
                array('text' => 'Suami', 'value' => 'Suami'),
                array('text' => 'Istri', 'value' => 'Istri'),
                array('text' => 'Anak', 'value' => 'Anak'),
				      )
					  ),
        array (
				      'name' => 'nomor_kartu_penjamin',
				      'width' => 2,
		      		'label'=> 'Nomor Kartu Penjamin',
					  ),
        array (
				      'name' => 'email',
				      'width' => 2,
		      		'label'=> 'Email',
					  ),
        array (
				      'name' => 'jenis_kelamin',
				      'label'=> 'Jenis Kelamin',
				      'width' => 2,
		      		'options' => array(
                array('text' => 'Laki-laki', 'value' => 'Laki-laki'),
                array('text' => 'Perempuan', 'value' => 'Perempuan'),
				      )
					  ),
        array (
		      'name' => 'tanggal_lahir',
		      'label'=> 'Tanggal Lahir',
		      'width' => 2,
		      'attributes' => array(
		        array('data-date' => 'datepicker')
			    )),
        array (
				      'name' => 'no_identitas',
				      'width' => 2,
		      		'label'=> 'No. Identitas',
					  ),
        array (
				      'name' => 'tlp',
				      'width' => 2,
		      		'label'=> 'No. Telp Rumah',
					  ),
        array (
				      'name' => 'hp',
				      'width' => 2,
		      		'label'=> 'No. Seluler',
					  ),
    );
    $this->childs = array (
    );
  }

  function dt () {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('pasien.nama')
      ->select('pasien.alamat')
      ->select('pasien.no_rm');
    return parent::dt();
  }

}