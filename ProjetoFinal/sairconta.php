<?php
    session_start();
    session_destroy();
    header("Location: ../ProjetoFinal/index.php?account-deleted");
?>

<!-- Criar um logout para terminar a sessão - https://www.youtube.com/watch?v=b-2_Y53CTYA -->