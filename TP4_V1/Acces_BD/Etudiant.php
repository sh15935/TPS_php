<?php
require_once "connexion.php";
$link= Connect();
function Afficher($code) {
    global $link;
    $etudiant=array();
    $req="SELECT * FROM etudiant WHERE code ='$code'";
    $res=mysqli_query($link,$req);
    $etudiant= mysqli_fetch_array($res);
    return $etudiant;
}

function Modifier_password($user,$nouveau_password){
    global $link;
    $req= "UPDATE users SET `password`='$nouveau_password' WHERE `user`='$user'";
    $res= mysqli_query($link,$req);
    return $res;
}

function Modifier_photo($code,$nouvelle_photo){
    global $link;
    $req= "UPDATE etudiant SET `photo` = '$nouvelle_photo' WHERE `code` = '$code'";
    $res= mysqli_query($link,$req);
    return $res;
}

function GetEtudiantByUser($user) {
    $link = Connect();
    $req = "SELECT * FROM etudiant WHERE user = '$user'";
    $res = mysqli_query($link, $req);

    if ($res) {
        return mysqli_fetch_assoc($res);
    }
    return null;
}

