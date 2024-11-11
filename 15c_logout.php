<?php
// Página de logout (15c_logout.php)
session_start();
session_destroy();
// destroi a sessao do usuario
header("location: 15a_sistema.php");
exit();


?>
