<?php
require_once "connexion.php";
$link= Connect();
function Afficher($code) {
    global $link;
    $etudiant=array();
    $req="select * from etudiant where code ='$code'";
    $res=mysqli_query($link,$req);
    $etudiant= mysqli_fetch_array($res);
    return $etudiant;
}

function Modifier_password($code,$nouveau_password){
    global $link;
    $req= "update users set
           password='$nouveau_password'
           where id='$code'";
    $res= mysqli_query($link,$req);
    return $res;
}

function Modifier_photo($code,$nouvelle_photo){
    global $link;
    $req= "update users set
           photo='$nouvelle_photo'
           where id='$code'";
    $res= mysqli_query($link,$req);
    return $res;
}
?>