<?php include 'header.php' ?>

	<?php
		if (!isset($_POST['item_name']) || !isset($_POST['item_inf']) || !isset($_POST['price'])){
			die ("Введены не все данные.");
		}
		
		$item_name = $_POST['item_name'];
		$item_inf = $_POST['item_inf'];
		$price = $_POST['price'];
		$photo = '../picture/'.$_POST['photo'].'.jpg';
		
		session_start();
		$itemID = $_SESSION['itemID'];
		

		$db = "shop_01";
		$link = mysqli_connect('localhost', 'root', '', $db);
		
		
		if (!$link) die ("Невозможно подключение к MySQL");
		mysqli_select_db ($link, $db) or die ("Невозможно открыть базу данных");
		
		$query_2 = "UPDATE items SET item_name = '$item_name', item_inf = '$item_inf', price = '$price', photo = '$photo' WHERE itemID = '$itemID'";
		mysqli_query($link, $query_2);
		
		mysqli_close ($link);
		header("Location:index_products.php");
		die();
		
	?>

<?php include 'footer.php' ?>