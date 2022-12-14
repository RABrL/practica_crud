<?php 
    class UsernameModel{
        private $PDO;

        public function __construct()
        {
            require_once('/var/www/html/coex/practica_crud/config/db.php');
            $con = new Db();
            $this->PDO = $con->conection();
        }

        public function insert($nombre){
            $stament = $this->PDO->prepare('INSERT INTO usuarios(nombre) VALUES(:nombre)');
            $stament->bindParam(':nombre',$nombre);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function show($id){
            $stament = $this->PDO->prepare('SELECT * FROM usuarios where id = :id limit 1');
            $stament->bindParam(':id',$id);
            return ($stament->execute()) ? $stament->fetch() : false;
        }

        public function index(){
            $stament = $this->PDO->prepare('SELECT * FROM usuarios');
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function update($id,$nombre){
            $stament = $this->PDO->prepare('UPDATE usuarios SET nombre = :nombre where id = :id');
            $stament->bindParam(':nombre',$nombre);
            $stament->bindParam(':id',$id);
            return ($stament->execute()) ? $id : false;
        }

        public function delete($id){
            $stament = $this->PDO->prepare('DELETE FROM usuarios WHERE id = :id');
            $stament->bindParam(':id',$id);
            return ($stament->execute()) ? true : false;
        }
    }
?>