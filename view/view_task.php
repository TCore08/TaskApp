<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Task List</h1>
<?php 

include '../database/database_config.php';

$sql = $conn->prepare("SELECT id, task from tasks");

$sql->execute();

$tasks = $sql->fetchAll();
?>
<p>Put a &#9989 if its completed</p>

<?php foreach($tasks as $todo): ?>

	<tr>
        <td><input type="checkbox" name="status" value="Completed">  <?php echo $todo['task']; ?></td><br><br>
    </tr>

    <?php endforeach; ?>




</body>
</html>


 