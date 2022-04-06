<?php
//echo $_POST["pokemon"];
if (isset($_REQUEST['index']) && strtolower($_POST['pokemon'])=='pikachu'){
    session_start();
    $_SESSION['pantalla1']='check';
    header('location: ../view/pantalla1.php');
} else if(isset($_POST['index'])) {
    header('Location: ../index.php?msg=25');
}
if (isset($_REQUEST['pantalla1']) && strtolower($_POST['pokemon1'])=='pichu'){
    session_start();
    $_SESSION['pantalla2']='check';
    header('location: ../view/pantalla2.php');
} else  {
    header('Location: ../view/pantalla1.php?msg=25');
}

?>


