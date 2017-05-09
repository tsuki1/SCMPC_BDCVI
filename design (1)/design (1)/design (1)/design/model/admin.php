<?php

class admin{
    private $pdo;
    public function __contruct() {
        try {
            $this->pdo =Conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }
    public function requy() {
        try {
        $sx=$this->pdo->prepare("SELECT * FROM usuarios");
        $sx->execute();
        return $sx->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
        
    }
}
