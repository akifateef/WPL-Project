<?php
session_start();
unset($_SESSION['user']);

header("location: 1index.html");

?>