<?php 

function saveData($todos) {
	file_put_contents('todo.txt', serialize($todos));
	header("Location:index.php");
}

$todos = [];

if(file_exists('todo.txt')) {
	$file = file_get_contents('todo.txt');
	$todos = unserialize($file);
}

if(isset($_POST['todo'])) {
	$data = $_POST['todo'];
	$todos[] = [
		'todo' => $data,
		'status' => 0,
	];
	saveData($todos);
}

if(isset($_GET['status'])) {
	$todos[$_GET['key']]['status'] = $_GET['status'];
	saveData($todos);
}

if(isset($_GET['hapus'])) {
	unset($todos[$_GET['key']]);
	saveData($todos);
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>TODO APP</title>

	<style>
		* {
			margin : 5px
		}

		body {
			text-align : center;
		}
		
	</style>
 </head>
 <body>
 	<h1>Todo App</h1>

 	<form action="" method="post">
 		<label>Apa kegiatan kamu hari ini ?</label> <br>
 		<input type="text" name="todo">
 		<button type="submit">Simpan</button>
 	</form>

 	<ul>
		<?php foreach($todos as $key => $value): ?>
 		<li>
 			<input type="checkbox" name="todo" onclick="window.location.
			href = 'index.php?status=<?php echo ($value['status'] == 1)?'0':'1' ?>&key=<?php echo $key; ?>'"
			<?php if($value['status'] == 1){ echo 'checked';} ?>>
 			
			<label><?php 
				if($value['status'] == 1) {
					echo "<del>" . $value['todo'] . "</del>";
				} else {
					echo $value['todo'];
				}
			?></label>
 			<a href="index.php?hapus=1&key=<?= $key; ?>" onclick="return confirm('Are you sure ?')">hapus</a>
 		</li>
		<?php endforeach; ?>
 	</ul>
 </body>
 </html>












 