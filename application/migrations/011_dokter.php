<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_dokter extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `dokter` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `nama` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `dokter`");
  }

}