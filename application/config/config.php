<?php
 class Configuration {
     public $db_server, $db_user, $db_passwd;

     public function __construct(){
         $this->db_server = 'localhost';
         $this->db_user = 'root';
         $this->db_passwd = '';
     }
 }
?>