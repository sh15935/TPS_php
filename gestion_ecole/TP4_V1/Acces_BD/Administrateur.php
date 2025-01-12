<?php
require_once "connexion.php";
$link= Connect();
function Ajouter($data) {
global $link;
    $req = "INSERT INTO etudiant (nom, prenom, sexe, photo, email, langues, specialite)
            VALUES ('{$data['nom']}', '{$data['prenom']}', '{$data['sexe']}', '{$data['photo']}', '{$data['email']}', '{$data['langues']}', '{$data['specialite']}')";
    
    $res = mysqli_query($link, $req);
    
    return $res;
}


function Modifier($data){
global $link;
    $req= "UPDATE etudiant SET
        nom='{$data['nom']}',
        prenom='{$data['prenom']}',
        sexe='{$data['sexe']}',
        photo='{$data['photo']}',
        email='{$data['email']}',
        langues='{$data['langues']}',
        specialite='{$data['specialite']}'
        WHERE code='{$data['code']}'";
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
    $etudiant = [];
    $req = "SELECT * FROM etudiant";
    $res = mysqli_query($link, $req);
    while ($Etu = mysqli_fetch_assoc($res)) {
        $etudiant[] = $Etu;
    }
    mysqli_free_result($res);
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
