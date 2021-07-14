<?php
	session_start();
	session_destroy();
	echo "<script>
                window.location.href = 'login.php';
        </script>";
	//var_dump($_SESSION);
	//header('location:login.php');
?>