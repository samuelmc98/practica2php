<?php
require_once 'admin.php';
class AdminDao{
    private $pdo;
    public function __construct(){
        require_once 'conexion.php';
        $this->pdo=$pdo;
    }

    public function login($user){
        $query = "SELECT * FROM tbl_administrador WHERE email_administrador=? AND passwd_administrador=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$user->getEmail();
        $passwd=$user->getPasswd();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$passwd);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        if(!empty($numRow) && $numRow==1) {
            $user->setEmail($result['email']);
            $user->setPasswd($result['psswd']);
            session_start();
            $_SESSION['user']=$user;
            return true;
        }else {
            return false;
        }
    }
}

?>