<?php 
    class UsernameController{
        private $model;

        public function __construct()
        {
            require_once('/var/www/html/coex/practica_crud/model/usernameModel.php');
            $this->model = new UsernameModel();
        }

        public function insert($nombre){
            $id = $this->model->insert($nombre);
            return ($id) ? header('location:show.php?id='.$id) : header('location:create.php');
        }

        public function show($id){
            return ($this->model->show($id)) ? $this->model->show($id): header('location:index.php') ;
        }

        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }

        public function update($id,$nombre){
            return ($this->model->update($id,$nombre)) ? header('location:show.php?id='.$id) : header('location:index.php');
        }
        
        public function delete($id) {
            return ($this->model->delete($id)) ? header('location:index.php') : header('location:show.php') ;
        }
    }
?>