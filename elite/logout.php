<?php
include 'conn/conn.php';
session_start();
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/elite/index.php");

?>