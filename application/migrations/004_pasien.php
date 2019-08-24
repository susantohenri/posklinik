<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_pasien extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `pasien` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `createdAt` datetime DEFAULT NULL,
        `updatedAt` datetime DEFAULT NULL,
        `no_rm` varchar(255) NOT NULL,
        `nama` varchar(255) NOT NULL,
        `alamat` varchar(255) NOT NULL,
        `perusahaan` varchar(255) NOT NULL,
        `jenis_kelamin` varchar(255) NOT NULL,
        `tanggal_lahir` varchar(255) NOT NULL,
        `no_identitas` varchar(255) NOT NULL,
        `tlp` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `pasien`");
  }

}