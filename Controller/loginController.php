<?php
include '../Model/user.php';
include '../Model/conexion.php';
    $femail = $_POST ['femail'];
    $fpasswd = $_POST ['fpasswd'];
    //echo "El email es {$femail} y la contraseña es {$fpasswd}";
    //Crero el objeto User
    $user=new User ($femail,$fpasswd);
    echo $user->getEmail();
    echo "<br>";
    echo $user->getPasswd();
    $sql="Select * from tbl_user where email_user=? and passwd=?";
    $smt=$conn->prepare($sql);
    $smt->bindParam(1, $femail);
    $smt->bindParam(2, $fpasswd);
    $smt->execute();
    $numPerson=$smt->rowcount();
    echo "<br>";
    echo $numPerson;

    if ($numPerson == 1){
        header("Location:../View/home.php")
    }else{
        header("Location:vista_login.html?error=1")
    }
?>