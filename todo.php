<?php 

$add_task = "";

if (isset($_POST['submit'])) {
	$title = $_POST['title'];

	if(!empty($title)) {
		$add_task = "Your task has been succesfully added."; 
	}if(empty($title)) {
		$add_task = "You must fill in the task.";
	} else { 
	$statement = $pdo->prepare("INSERT INTO todo (title) VALUES ('$title')");
	$statement ->execute();

	//header('location: index.php');
}
}

$tasks = $pdo->prepare("SELECT * FROM todo WHERE completed = 0");
$tasks ->execute();
$todolist = $tasks -> fetchALL(PDO::FETCH_ASSOC);

if(isset($_GET['delete_task'])) {
		$id = $_GET['delete_task'];
		$delete = $pdo->prepare("DELETE FROM todo WHERE id = :id");
		$delete->execute(array(":id" => $id ));
		header('location: index.php');
}


if(isset($_GET['mark_complete'])) {
	$id = $_GET['mark_complete'];
	$complete = $pdo-> prepare("UPDATE todo SET completed = 1 WHERE id = :id");
	$complete->execute(array(":id" => $id ));
	header('location: index.php');
}

$completed = $pdo->prepare("SELECT * FROM todo WHERE completed = 1");
$completed ->execute();
$completedlist = $completed -> fetchALL(PDO::FETCH_ASSOC);