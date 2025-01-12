<?php
require_once "../Acces_BD/connexion.php";
session_start();

function login($username,$password){
    $link=Connect();
    $req= "SELECT `user`, `password`, `nature` FROM `users` WHERE `user`='$username'";
    $res= mysqli_query($link,$req);
    $resulat=mysqli_fetch_assoc($res);
    if($resulat){
        if($password===$resulat['password']){
            $_SESSION['user']=$username;
            $_SESSION['password']=$password;
            $_SESSION['nature']=$resulat['nature'];
            if($_SESSION['nature']=='admin'){
                header('Location:../Gestions_Actions/Administrateur.php');
            } else {
                header("Location:../Gestions_Actions/Etudiant.php?user=$username");
            }
        } else {
        echo "password incorrect";
        header('Location:../Index.php');
        }
    } else {
        echo "user non trouvé";
    }
}
?>
