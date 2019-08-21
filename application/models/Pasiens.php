<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pasiens extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'pasien';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
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
				      'name' => 'perusahaan',
				      'width' => 2,
		      		'label'=> 'Perusahaan',
					  ),
        array (
				      'name' => 'jenis_kelamin',
				      'width' => 2,
		      		'label'=> 'Jenis Kelamin',
					  ),
        array (
				      'name' => 'tanggal_lahir',
				      'width' => 2,
		      		'label'=> 'Tanggal Lahir',
					  ),
        array (
				      'name' => 'no_identitas',
				      'width' => 2,
		      		'label'=> 'No. Identitas',
					  ),
        array (
				      'name' => 'tlp',
				      'width' => 2,
		      		'label'=> 'No. Telp',
					  ),
    );
    $this->childs = array (
    );
  }

  function dt () {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('pasien.no_rm');
    return parent::dt();
  }

}