<?php
require_once "connexion.php";
$link= Connect();


function Ajouter($data) {
    global $link;

    $req1 = "INSERT INTO users (user, password, nature) VALUES ('{$data['user']}', '{$data['user']}', 'student')";
    $res1 = mysqli_query($link, $req1);

    if ($res1) {
        $req2 = "INSERT INTO etudiant (nom, prenom, sexe, photo, email, langues, specialite, user)
                 VALUES ('{$data['nom']}', '{$data['prenom']}', '{$data['sexe']}', '{$data['photo']}', '{$data['email']}', '{$data['langues']}', '{$data['specialite']}', '{$data['user']}')";
        $res2 = mysqli_query($link, $req2);
        return $res2;
    }
}

function Modifier($data){
global $link;
    $req1= "UPDATE etudiant SET
        nom='{$data['nom']}',
        prenom='{$data['prenom']}',
        sexe='{$data['sexe']}',
        photo='{$data['photo']}',
        email='{$data['email']}',
        langues='{$data['langues']}',
        specialite='{$data['specialite']}'
        WHERE code='{$data['code']}'";
    return mysqli_query($link,$req);
}

function Supprimer($code) {
    global $link;

    $user0 = "SELECT user FROM etudiant WHERE code = $code";
    $res0 = mysqli_query($link, $user0);

    $row = mysqli_fetch_assoc($res0);
    $user = $row['user'];
    $req2 = "DELETE FROM etudiant WHERE code = $code";
    $res2 = mysqli_query($link, $req2);
    $req1 = "DELETE FROM users WHERE user = '$user'";
    $res1 = mysqli_query($link, $req1);
    return $res1;
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
