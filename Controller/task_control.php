<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

include '../database/database_config.php';

$sql = "SELECT id, task FROM tasks";


$tasks  = $conn->exec($sql);

echo "Task List" ;
?>

 <?php foreach($tasks as $todo): ?>

 	<tr>
        <td><?php echo $todo->task; ?></td>
    </tr>

<?php endforeach; ?>





</body>
</html>