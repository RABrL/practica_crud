<?php 
    class UsernameController{
        private $model;

        public function __construct()
        {
            require_once('/var/www/html/coex/practica_crud/model/usernameModel.php');
            $this->model = new UsernameModel();
        }

        public function guardar($nombre){
            $id = $this->model->insert($nombre);
            return ($id) ? header('location:show.php?id='.$id) : header('location:create.php');
        }

        public function show($id){
            return ($this->model->show($id)) ? $this->model->show($id): header('location:index.php') ;
        }
    }
?>