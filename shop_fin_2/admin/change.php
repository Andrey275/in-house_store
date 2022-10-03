<?php include 'header.php' ?>


	<?php
		
		$user_id = $_POST['userID'];
		$full_name = $_POST['full_name'];
		$org_pas = $_POST['org_pas'];
		$points = $_POST['points'];
		$user_information = $_POST['user_information'];
		$picture = '../picture/'.$_POST['picture'].'.jpg';
		$role = $_POST['role'];
		$tg_ID = $_POST['tg_ID'];
		
		
		session_start();
		$_SESSION['user_id'] = $user_id;
		
	?>

	
		<div class="col">
			<div class="container">
				<form action="change-ok.php" method="post">
					  <div class="row">
							<div class="col-sm">
								<label for="full_name">ФИО работника</label>
							</div>
							<div class="col-bi">
								<input type="varchar" name="full_name" class="add-frame" value="<?php echo $full_name; ?>" placeholder="Работник..." required="required">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="org_pas">Пароль</label>
							</div>
							<div class="col-bi">
								<input type="varchar" name="org_pas" class="add-frame" value="<?php echo $org_pas; ?>" placeholder="Пароль..." required="required">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="points">Баллы</label>
							</div>
							<div class="col-bi">
								<input type="varchar" name="points" class="add-frame" value="<?php echo $points; ?>" placeholder="Баллы..." required="required">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="user_information">Информация о пользователе</label>
							</div>
							<div class="col-bi">
								<input type="varchar" name="user_information" class="add-frame" value="<?php echo $user_information; ?>" placeholder="Информация...">
							</div>
					  </div>
				
					  <div class="row">
							<div class="col-sm">
								<label for="picture">Фото</label>
							</div>
							<div class="col-bi">
								<input type="text" name="picture" class="add-frame" value="<?php echo $picture; ?>" placeholder="Введите название картинки...">
							</div>
					  </div>

					  <div class="row">
							<div class="col-sm">
								<label for="role">Должность</label>
							</div>
							<div class="col-bi">
								<input type="varchar" name="role" class="add-frame" value="<?php echo $role; ?>" placeholder="Должность..." required="required">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="tg_ID">Телеграм-ID</label>
							</div>
							<div class="col-bi">
								<input type="varchar" name="tg_ID" class="add-frame" value="<?php echo $tg_ID; ?>" placeholder="Телеграм-ID...">
							</div>
					  </div>
					  <div class="add-button">							
							<a href="delete.php" class="knopka red">Удалить</a>
							<input type="submit" class="knopka" value="Сохранить" />
					  </div>
				  </form>
			</div>
		</div>
	</main>		
		

<?php include 'footer.php' ?>