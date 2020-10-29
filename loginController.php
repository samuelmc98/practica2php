<?php 
    require_once 'adminDAO.php';
    require_once 'admin.php';
    $femail = $_POST ['email'];
    $passwd = $_POST ['psswd'];

   
      $admin = new Administrador($_POST['email'], $_POST['psswd']);
      $AdminDAO = new AdminDAO();
      if($AdminDAO->login($admin)){
          header('Location:tabla.php');
         //echo "1";
      }else {
          header('Location:index.php');
          //echo "2";
      }
  
?>