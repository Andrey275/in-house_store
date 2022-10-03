<?php include 'header.php' ?>


		<?php
			$db = "shop_01";
			$link = mysqli_connect('localhost', 'root', '', $db);
			mysqli_set_charset($link, 'utf8');
			$query_2 = "SELECT * FROM items";
			$result_2 = mysqli_query ($link, $query_2);
			$n2 = mysqli_num_rows ($result_2);
		?>


		<div class="column">
			<div class="add-button">
				<a href="addition_ps.php" class="knopka">Добавить товар</a>
			</div>


			<?php if ($result_2) { ?>
				<?php for ($i2 = 0; $i2 <= $n2; $i2++) { ?>		
					<div class="info-box">
						<div class="index-container">
							<?php $row2 = mysqli_fetch_array($result_2); ?>
							<?php if ($row2) { ?>
								<form action="change_ps.php" method="post">
									<input type="int" name="itemID" maxlength="10" class="input-ID" placeholder="ID" value="<?php echo $row2['itemID']; ?>" readonly>
									<input type="varchar" name="item_name" maxlength="150" class="input-name" placeholder="Наименование" value="<?php echo $row2['item_name']; ?>">
									<input type="varchar" name="photo" maxlength="300" class="input-third_data" placeholder="Фото" value="<?php echo $row2['photo']; ?>">
									<input type="int" name="price" maxlength="20" class="input-price" placeholder="Баллы" value="<?php echo $row2['price']; ?>">
									<input type="varchar" name="item_inf" maxlength="500" class="input-inform" placeholder="Информация о товаре" value="<?php echo $row2['item_inf']; ?>">
									<input type="submit" value="Изменить">
								</form>
							<?php } ?>
						</div>
					</div>		
				<?php } ?>
			<?php } ?>

		<?php mysqli_close ($link); ?>
			
		


<?php include 'footer.php' ?>