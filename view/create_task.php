<!DOCTYPE html>
<html>
<head>
	<title>Add Task</title>
</head>
<style type="text/css">
	
div {
    
    border: 1px solid #4CAF50;
}

</style>
<body>
	<h1> Task List</h1>


	<form method="POST" action=""> 
		<input type="text" name="task_name" placeholder="Add a task">
        <input type="submit" value="+">
	</form>





<?php

include '../database/database_config.php';

 if(isset($_POST) && (isset($_POST['task_name'])))
    {
    	extract($_POST);
    	$sql = "INSERT INTO `tasks` (`task`) VALUES ('$task_name')";
    	$conn->exec($sql);

    }



 $sqld = $conn->prepare("SELECT id, task from tasks");

 $sqld->execute();

 $tasks = $sqld->fetchAll();
 $i = 1;
?>
<p>Put a &#9989 if its completed</p>


<?php foreach($tasks as $todo): ?>


	<tr>
		
        <td><input type="checkbox" name="status" value="Completed">  <?php echo $i++ .">>" . $todo['task']; ?></td><br><br>
         

    </tr>

    <?php endforeach; ?>




<?php $conn->close(); ?>




</body>

</html>

