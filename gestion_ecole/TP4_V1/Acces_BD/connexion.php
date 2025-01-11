<?php
function Connect(){
$contenu=file(__DIR__."/.env");
$server=trim(explode(':',$contenu[0])[1]);
$user=trim(explode(':',$contenu[1])[1]);
$password=trim(explode(':',$contenu[2])[1]);
$db_name=trim(explode(':',$contenu[3])[1]);
$cnx=mysqli_connect($server,$user,$password,$db_name);
return $cnx;
}
/* if(Connect())
echo "connexion OK";
else
echo "Connexion Erreur !!!"; 
*/
?>