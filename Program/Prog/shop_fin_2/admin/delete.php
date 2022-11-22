<?php include 'header.php' ?>

	<?php
		
		session_start();
		$user_id = $_SESSION['user_id'];
		

		$db = "shop_01";
		$link = mysqli_connect('localhost', 'root', '', $db);
		
		
		if (!$link) die ("Невозможно подключение к MySQL");
		mysqli_select_db ($link, $db) or die ("Невозможно открыть базу данных");
		
		
		$link->query("DELETE FROM user WHERE userID = '$user_id'");
		
		mysqli_close ($link);
		header("Location:index.php");
		die();
		
	?>
		
<?php include 'footer.php' ?>