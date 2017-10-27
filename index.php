<?php
require 'database.php';


require 'todo.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todo list</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>

	<div class="wrapper">
		<div class="container">
			<div class="row">
			<div class="col-md-6">
		<div class="heading">
		<h2>My Todo List</h2>
	</div>


	<form action="index.php" method="POST">
		<p><?php echo $add_task ?></p>
		<input type="text" name="title" class="task_input">
		<button type="submit" class="add_btn" name="submit">Add Task</button>

	</form>

	<table>
		<thead>
			<tr>
				<th> </th>
				<th>Things to do</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($todolist as $todo) {
			 ?>
			<tr>
				<td></td>
				<td class="task"><p><?= $todo['title']; ?></p></td>
				<td>

					<a href="index.php?mark_complete=<?php echo $todo['id']; ?>">Mark as done</a>

			
</td>
				<td class="delete">
					<a href="index.php?delete_task=<?php echo $todo['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
</table>
</div>

<div class="col-md-6">	
<div class="heading">
		<h2>Completed List</h2>
	</div>

		<table>
		<tbody>
			
			<?php foreach ($completedlist as $complete) {
			 ?>
			<tr>
				<td></td>
				<td class="task"><p><?= $complete['title']; ?></p></td>
				<td class="delete">
					<a href="index.php?delete_task=<?php echo $todo['id']; ?>">Delete</a>
				</td>
		</tr>
		<?php } ?>


	</tbody>
</table>
</div>
</div>
</div> <!--completedlist-->

</div> <!--wrapper-->
</body>



</html>