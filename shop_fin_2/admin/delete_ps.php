<?php include 'header.php' ?>

	<?php
		
		session_start();
		$itemID = $_SESSION['itemID'];
		

		$db = "shop_01";
		$link = mysqli_connect('localhost', 'root', '', $db);
		
		
		if (!$link) die ("Невозможно подключение к MySQL");
		mysqli_select_db ($link, $db) or die ("Невозможно открыть базу данных");
		
		
		$link->query("DELETE FROM items WHERE itemID = '$itemID'");
		
		mysqli_close ($link);
		header("Location:index_products.php");
		die();
		
	?>
		
<?php include 'footer.php' ?>