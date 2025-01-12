<?php
$action=$_GET['action'];
?>
<center>
    <form action="/Gestions_Actions/Etudiant.php?action=<?$action?>" method="post">
     <table>
        <tr>
            <td>Photo</td>
            <td><input type="text" name="photo" ></td>
        </tr>
        <tr>
            <td>Mot de pass</td>
            <td><input type="text" name="password" ></td>
        </tr>
     </table>
    </form>
</center>