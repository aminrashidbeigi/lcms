<?php
/**
 * User: Amin Rashidbeigi
 * Date: 8/1/2016
 * Time: 9:27 AM
 */
class lcms {
    var $host;
    var $username;
    var $password;
    var $table;

    public function display_public(){

    }

    public function display_admin() {
    }

    public function write(){

    }

    public function connect(){
        mysql_connect($this->host,$this->username,$this->password) or die("couldnt connect database". mysqli_connect_error());
        mysql_select_db($this->table) or die("Could not select database");

    }

    private function buldDB(){
        $sql = <<<MySQL_QUERY
            CREATE TABLE IF NOT EXISTS testDB(
                title VARCHAR(150),
                bodytexr TEXT,
                created VARCHAR(100)
            )
MySQL_QUERY;

        if (!empty($sql)) {
            return mysqli_query($sql);
        }

    }
}