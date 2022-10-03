<?php include 'header.php' ?>

	<?php
		if (!isset($_POST['item_name']) || !isset($_POST['item_inf']) || !isset($_POST['price'])){
			die ("Введены не все данные.");
		}
		
		$item_name = $_POST['item_name'];
		$item_inf = $_POST['item_inf'];
		$price = $_POST['price'];
		$photo = '../picture/'.$_POST['photo'].'.jpg';
		

		$db = "shop_01";
		$link = mysqli_connect('localhost', 'root', '', $db);
		
		
		if (!$link) die ("Невозможно подключение к MySQL");
		mysqli_select_db ($link, $db) or die ("Невозможно открыть базу данных");
		
		$query = "INSERT INTO items (item_name, item_inf, price, photo) VALUES (?,?,?,?)";
		$stmt = $link->prepare($query);
		$stmt->bind_param("ssss", $item_name, $item_inf, $price, $photo);
		$stmt->execute();
		
		
		mysqli_close ($link);
		header("Location:index_products.php");
		die();
		
	?>

<?php include 'footer.php' ?>