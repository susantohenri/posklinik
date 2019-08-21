<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_penjualanlainlain extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `penjualanlainlain` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `penjualan` varchar(255) NOT NULL,
        `item` varchar(255) NOT NULL,
        `harga` INT(11) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `penjualanlainlain`");
  }

}