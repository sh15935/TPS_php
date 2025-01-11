<?php
require_once "connexion.php";
$link= Connect();
function Ajouter($data){
global $link;
$req= "insert into etudiant(code,nom,prenom,sexe,photo,email,langues,specialite) 
    values ('{$data['code']}','{$data['nom']}','{$data['prenom']}','{$data['sexe']}','{$data['photo']}','{$data['email']}','{$data['langues']}','{$data['specialite']}') ";
$res = mysqli_query($link,$req);
return $res;
}

function Modifier($data){
global $link;
    $req= "update etudiant set
        nom='{$data['nom']}',
        prenom='{$data['prenom']}',
        sexe='{$data['sexe']}',
        photo='{$data['photo']}',
        email='{$data['email']}',
        langues='{$data['langues']}',
        specialite='{$data['specialite']}',
        where code='{$data['code']}', ";
$res= mysqli_query($link,$req);
return $res;
}

function Supprimer($code) {
    global $link;
    $req="delete from etudiant where code=$code";
    $res=mysqli_query($link,$req);
    
    return $res;
}
function Lister() {
        global $link;
        $etudiant=array();
        $req="select * from etudiant";
        $res=mysqli_query($link,$req);
        while($Etu=mysqli_fetch_array($res))
        $etudiant[]=$Etu;
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


?>