<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Permissions extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'permission';
    $this->thead = array();
    $this->form = array(
      array (
        'name' => 'entity',
        'label'=> 'Entity',
        'options' => array(
          array ('text' => 'User', 'value' => 'User'),
          array ('text' => 'Role', 'value' => 'Role'),
          array ('text' => 'Permission', 'value' => 'Permission'),
          array ('text' => 'Pasien', 'value' => 'Pasien'),
          array ('text' => 'Layanan', 'value' => 'Layanan'),
          array ('text' => 'Obat', 'value' => 'Obat'),
          array ('text' => 'Penjualan', 'value' => 'Penjualan'),
          array ('text' => 'PenjualanLayanan', 'value' => 'PenjualanLayanan'),
          array ('text' => 'PenjualanObat', 'value' => 'PenjualanObat'),
          array ('text' => 'Dokter', 'value' => 'Dokter'),
          array ('text' => 'Staff', 'value' => 'Staff'),
          array ('text' => 'PenjualanLainLain', 'value' => 'PenjualanLainLain'),
          /*additionalEntity*/
        ),
        'width' => 4
      ),
      array (
        'name' => 'action',
        'label'=> 'Action',
        'options' => array(
          array ('text' => 'List', 'value' => 'index'),
          array ('text' => 'Create', 'value' => 'create'),
          array ('text' => 'Detail', 'value' => 'read'),
          array ('text' => 'Update', 'value' => 'update'),
          array ('text' => 'Delete', 'value' => 'delete')
        ),
        'width' => 4
      ),
    );
  }

  function getPermissions () {
    $permission = array();
    foreach ($this->find(array('role' => $this->session->userdata('role'))) as $perm) $permission[] = "{$perm->action}_{$perm->entity}";
    return $permission;
  }

  function getPermittedMenus () {

  }
}