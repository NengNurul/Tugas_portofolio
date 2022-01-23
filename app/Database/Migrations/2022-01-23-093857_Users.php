<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    private $table = "users";

    public function up()
    {
        $sql = "CREATE TABLE `{ $this->table }` (
            `user_id` INT(11) NOT NULL AUTO_INCREMENT,
            `username` VARCHAR(50) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
            `password` TEXT(65535) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
            PRIMARY KEY (`user_id`) USING BTREE
        )";

        $this->db->query( $sql );
    }

    public function down()
    {
        $sql = "DROP TABLE IF EXISTS `{ $this->table }`";

        $this->db->query($sql);
    }
}
