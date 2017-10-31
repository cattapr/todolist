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
	
	<?php } ?> <!--stänger foreach-->

	</tbody>

</table>

</div> <!--stänger col-md-6-->

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
				<a href="index.php?delete_task=<?php echo $complete['id']; ?>">Delete</a>
			</td>
		</tr>
		
		<?php } ?> <!--stänger foreach loop-->

		</tbody>
	</table>

</div><!--stänger col-md-6-->
</div><!--row-->
</div> <!--container-->
</div> <!--wrapper-->

<footer>
 <a href="https://github.com/cattapr/todolist">My github</a>
 </footer>
</body>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</html>