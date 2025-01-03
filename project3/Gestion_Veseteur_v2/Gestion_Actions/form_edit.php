<?php
isset($_GET['id']);
$id = $_GET['id'];
header("Location: ../IHM/form_edit.php?id= $id");
?>
