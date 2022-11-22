<?php include 'header.php' ?>

	<?php
		if (!isset($_POST['fullname']) || !isset($_POST['org_pas']) || !isset($_POST['points']) || !isset($_POST['role'])){
			die ("Введены не все данные.");
		}
		
		$fullname = $_POST['fullname'];
		$org_pas = $_POST['org_pas'];
		$points = $_POST['points'];
		$user_inf = $_POST['user_inf'];
		$picture = '../picture/'.$_POST['picture'].'.jpg';
		$role = $_POST['role'];
		$tg_ID = $_POST['tg_ID'];
		

		$db = "shop_01";
		$link = mysqli_connect('localhost', 'root', '', $db);
		
		
		if (!$link) die ("Невозможно подключение к MySQL");
		mysqli_select_db ($link, $db) or die ("Невозможно открыть базу данных");
		
		$query = "INSERT INTO user (full_name, org_pas, points, user_information, picture, role, tg_ID) VALUES (?,?,?,?,?,?)";
		$stmt = $link->prepare($query);
		$stmt->bind_param("ssssss", $fullname, $org_pas, $points, $user_inf, $picture, $role, $tg_ID);
		$stmt->execute();
		//$query = "INSERT INTO products (full_name, org_pas, points, user_information, role, tg_ID) VALUES ('$fullname','$org_pas','$points','$user_inf','$role','$tg_ID')";
		//mysqli_query($link, $query);
		
		
		mysqli_close ($link);
		header("Location:index.php");
		die();
		
	?>

<?php include 'footer.php' ?>