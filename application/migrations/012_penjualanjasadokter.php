<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_penjualanjasadokter extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `penjualanjasadokter` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `penjualan` varchar(255) NOT NULL,
        `dokter` varchar(255) NOT NULL,
        `harga` INT(11) NOT NULL,
        `diskon` INT(11) NOT NULL,
        PRIMARY KEY (`uuid`),
        KEY `dokter` (`dokter`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `penjualanjasadokter`");
  }

}