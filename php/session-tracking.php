<?php

session_start();

if(!isset($_SESSION['Email'])){

	session_destroy();

}

?>
