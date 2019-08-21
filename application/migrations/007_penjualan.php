<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_penjualan extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `penjualan` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `pasien` varchar(255) NOT NULL,
        `asal_pasien` varchar(255) NOT NULL,
        `asisten` varchar(255) NOT NULL,
        `kasir` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`),
        KEY `pasien` (`pasien`),
        KEY `asisten` (`asisten`),
        KEY `kasir` (`kasir`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `penjualan`");
  }

}