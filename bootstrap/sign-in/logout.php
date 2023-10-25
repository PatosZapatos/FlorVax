<?php 
session_start();
session_unset();
session_destroy();

echo "<script>location.href='../../paginaprincipal/pag1.php'</script>";