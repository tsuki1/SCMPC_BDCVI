<?php

class adminController{
    private $model;
    public function __contruct() {
        try {
        $this->model=new admin();
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }


    public function admin(){
        
        require_once ('view/all/header.php');
        require_once ('view/all/navbar.php');
        require_once ('view/admin/rename.php');
        require_once ('view/admin/companions.php');
        require_once ('view/admin/file.php');
        require_once ('view/admin/registry.php');
        require_once ('view/admin/history.php');
        require_once ('view/admin/entrada.php');
        require_once ('view/admin/bahia.php');
        require_once ('view/all/footer.php');
        
      }
}
