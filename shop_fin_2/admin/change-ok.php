<?php include 'header.php' ?>

	<?php
		if (!isset($_POST['full_name']) || !isset($_POST['org_pas']) || !isset($_POST['points']) || !isset($_POST['role'])){
			die ("Введены не все данные.");
		}
		
		$full_name = $_POST['full_name'];
		$org_pas = $_POST['org_pas'];
		$points = $_POST['points'];
		$user_information = $_POST['user_information'];
		$picture = '../picture/'.$_POST['picture'].'.jpg';
		$role = $_POST['role'];
		$tg_ID = $_POST['tg_ID'];
		
		session_start();
		$user_id = $_SESSION['user_id'];
		

		$db = "shop_01";
		$link = mysqli_connect('localhost', 'root', '', $db);
		
		
		if (!$link) die ("Невозможно подключение к MySQL");
		mysqli_select_db ($link, $db) or die ("Невозможно открыть базу данных");
		
		$query = "UPDATE user SET full_name = '$full_name', org_pas = '$org_pas', points = '$points', user_information = '$user_information' , picture = '$picture', role = '$role', tg_ID = '$tg_ID' WHERE userID = '$user_id'";
		mysqli_query($link, $query);
		
		mysqli_close ($link);
		header("Location:index.php");
		die();
		
	?>

<?php include 'footer.php' ?>