<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_pembayaran extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `pembayaran` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `penjualan` varchar(255) NOT NULL,
        `jenis_pembayaran` varchar(255) NOT NULL,
        `jenis_kartu` varchar(255) NOT NULL,
        `no_kartu` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `pembayaran`");
  }

}