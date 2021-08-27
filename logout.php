<?php
session_start();
include_once("common.php");

session_unset();
header('location:login.php');

?>