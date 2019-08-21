<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_penjualanobat extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `penjualanobat` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `penjualan` varchar(255) NOT NULL,
        `obat` varchar(255) NOT NULL,
        `jumlah` INT(11) NOT NULL,
        `harga` INT(11) NOT NULL,
        `aturan` varchar(255) NOT NULL,
        `no_batch` varchar(255) NOT NULL,
        `diskon` INT(11) NOT NULL,
        PRIMARY KEY (`uuid`),
        KEY `obat` (`obat`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `penjualanobat`");
  }

}