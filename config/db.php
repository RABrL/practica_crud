<?php 
    class Db{
        private $host = 'localhost';
        private $user = 'brito';
        private $pass = 'Rbr1t01014#';
        private $dbname = 'prueba';

        public function conection(){
            try {
                $PDO = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->pass);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>