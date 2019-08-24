<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_penjualan extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `penjualan` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `createdAt` datetime DEFAULT NULL,
        `updatedAt` datetime DEFAULT NULL,
        `pasien` varchar(255) NOT NULL,
        `asal_pasien` varchar(255) NOT NULL,
        `dokter` varchar(255) NOT NULL,
        `jasa_dokter` INT(11) NOT NULL,
        `asisten` varchar(255) NOT NULL,
        `kasir` varchar(255) NOT NULL,
        `jenis_pembayaran` varchar(255) NOT NULL,
        `jenis_kartu` varchar(255) NOT NULL,
        `no_kartu` varchar(255) NOT NULL,
        `total` INT(11) NOT NULL,
        `dibayar` INT(11) NOT NULL,
        `kembali` INT(11) NOT NULL,
        PRIMARY KEY (`uuid`),
        KEY `pasien` (`pasien`),
        KEY `dokter` (`dokter`),
        KEY `asisten` (`asisten`),
        KEY `kasir` (`kasir`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `penjualan`");
  }

}