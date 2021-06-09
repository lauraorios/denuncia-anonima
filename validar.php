<?php 

	session_start();
	if(isset($_SESSION['emailLogin'])){
		$userC = $_SESSION['emailLogin'];
	} else {
		session_destroy();
		header("location: login.php?msg=FacaLogin");
	}

?>