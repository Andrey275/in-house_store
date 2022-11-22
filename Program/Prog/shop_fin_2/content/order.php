<?php include 'header.php' ?>

	<?php
		if (!isset($_POST['fullname']) || !isset($_POST['org-pas'])){
			die ("Введены не все данные.");
		}
		
		$full_name = $_POST['fullname'];
		$org-pas = $_POST['org-pas'];
		

!		$db = "shop_01";
!		$link = mysqli_connect('127.0.0.1', ' root@localhost', $db);
		

		if (!$link) die ("Невозможно подключение к MySQL");
		mysqli_select_db ($link, $db) or die ("Невозможно открыть базу данных");
		
!		$query = "SELECT * FROM deliveri WHERE !FIO!  LIKE '%$fullname%'";
		$pass = mysqli_fetch_array(mysqli_query ($link, $query));
		
		if (isset($pass['org-pas'])) {
			if ($org_pas == $pass['org-pas']) {
				echo "
					<p>Вы вошли на страницу.</p>
				";
			} else {
				echo "<p>Неверный пароль.</p>";
			}
		} else {
			echo "<p>Неверный пароль.</p>";
			$org_pas = '';
		}
		
		
		session_start();
		$_SESSION['fullname'] = $fullname;
		$_SESSION['org-pas'] = $org-pas;

				
	?>

	<div>
		<a href="index.php" class="knopka left">Назад</a>
		<a href="shop.php" class="knopka right">Войти</a>
	</div>
</main>
</body>

<?php include 'footer.php' ?>