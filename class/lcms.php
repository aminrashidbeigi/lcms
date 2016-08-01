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
    var $dbname;


    public function lcmsPublic(){

    }

    public function lcmsAdmin() {

    }

    public function addingToDatabase(){

    }


    private function buildAndConnectToDatabase(){
//    making connection
        $connection = new mysqli($this->host, $this->username, $this->password);
        if($connection->connect_error){
            die("connection failed: ".$connection->connect_error);
        }
//    creating database
        $sql = "CREATE DATABASE lcmsDB";
        if ($connection->query($sql) === TRUE){
            echo "database created successfully";
        } else{
            echo "Couldnt create database: ".$connection->error;
        }

        $connection->close();
    }

}