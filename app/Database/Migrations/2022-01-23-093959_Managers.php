<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Managers extends Migration
{
    private $table = "managers";

    public function up()
    {
        $sql = "CREATE TABLE `$this->table` (
            `manager_id` INT(11) NOT NULL AUTO_INCREMENT,
            `user_id` INT(11) NOT NULL DEFAULT '0',
            `source` VARCHAR(50) NOT NULL DEFAULT '0' COLLATE 'latin1_swedish_ci',
            `password` VARCHAR(50) NOT NULL DEFAULT '0' COLLATE 'latin1_swedish_ci',
            `description` TEXT(65535) NOT NULL DEFAULT '0' COLLATE 'latin1_swedish_ci',
            PRIMARY KEY (`manager_id`) USING BTREE
        )";

        $this->db->query( $sql );
    }
        
    

    public function down()
    {
        $sql = "DROP TABLE IF EXIST `$this->table`";

        $this->db->query( $sql );
    }

}
