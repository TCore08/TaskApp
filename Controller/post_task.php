<?php 
// print_r($_POST);
// exit;
include '../database/database_config.php';


    if(isset($_POST))
    {
    	extract($_POST);
    	$sql = "INSERT INTO `tasks` (`task`) VALUES ('$task_name')";
    	$conn->exec($sql);
    }




?>