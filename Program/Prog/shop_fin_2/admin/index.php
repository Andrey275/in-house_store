<?php include 'header.php' ?>

		<?php
			$db = "shop_01";
			$link = mysqli_connect('localhost', 'root', '', $db);
			mysqli_set_charset($link, 'utf8');
			$query = "SELECT * FROM user";
			$result = mysqli_query ($link, $query);
			$n = mysqli_num_rows ($result);
		?>

		<div class="column">
			<div class="add-button">
				<a href="addition.php" class="knopka">Добавить пользователя</a>
			</div>

			<?php if ($result) { ?>
				<?php for ($i = 0; $i <= $n; $i++) { ?>
					<div class="info-box">
						<div class="index-container">
							<?php $row = mysqli_fetch_array($result); ?>
							<?php if ($row) { ?>
								<form action="change.php" method="post">
									<input type="int" name="userID" maxlength="10" class="input-ID" placeholder="ID-Пользователя"  value="<?php echo $row['userID']; ?>" readonly>
									<input type="varchar" name="full_name" maxlength="150" class="input-name" placeholder="ФИО" value="<?php echo $row['full_name']; ?>">
									<input type="varchar" name="org_pas" maxlength="300" class="input-third_data" placeholder="Пароль" value="<?php echo $row['org_pas']; ?>">
									<input type="int" name="points" maxlength="20" class="input-points" placeholder="Баллы" value="<?php echo $row['points']; ?>">
									<input type="varchar" name="user_information" maxlength="500" class="input-inform" placeholder="Информация о пользователе" value="<?php echo $row['user_information']; ?>">
									<input type="varchar" name="picture" maxlength="30" class="input-avatar" placeholder="Фото" value="<?php echo $row['picture']; ?>">
									<input type="varchar" name="role" maxlength="30" class="input-role" placeholder="Должность" value="<?php echo $row['role']; ?>">
									<input type="int" name="tg_ID" maxlength="10" class="input-tg_ID" placeholder="Телеграм-ID" value="<?php echo $row['tg_ID']; ?>">
									<input type="submit" value="Изменить">
								</form>
							<?php } ?>
						</div>
					</div>		
				<?php } ?>
			<?php } ?>
			
		
		<?php mysqli_close ($link); ?>

<?php include 'footer.php' ?>