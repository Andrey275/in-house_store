	<?php
	session_start();

		if (!isset($_POST['fullname']) || !isset($_POST['org_pas'])){
			die ("Введены не все данные.");
		}
		
		$fullname = $_POST['fullname'];
		$org_pas = $_POST['org_pas'];

		$db = "shop_01";
		$connect = mysqli_connect('localhost', 'root', '', $db);

		if (!$connect) die ("Невозможно подключение к MySQL");
		mysqli_select_db ($connect, $db) or die ("Невозможно открыть базу данных");

$check_user = mysqli_query($connect, "SELECT userID FROM user WHERE full_name LIKE '%$fullname%' and org_pas='$org_pas'");
#var_dump($check_user); 
mysqli_close ($connect);

		if (mysqli_num_rows($check_user) > 0){
				$_SESSION['org_pas']=$org_pas;
				header('Location: shop.php');
			}else{
				header('Location: index.php');
			}
	


		



		
		
		
	?>
