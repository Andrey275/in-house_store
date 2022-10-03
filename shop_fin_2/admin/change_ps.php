<?php include 'header.php' ?>

	<?php
		
		$itemID = $_POST['itemID'];
		$item_name = $_POST['item_name'];
		$photo = '../picture/'.$_POST['photo'].'.jpg';
		$price = $_POST['price'];
		$item_inf = $_POST['item_inf'];
		
		
		session_start();
		$_SESSION['itemID'] = $itemID;
		
	?>
	
		<div class="col">
			<div class="container">
				<form action="change_ps-ok.php" method="post">
					  <div class="row">
							<div class="col-sm">
								<label for="item_name">Наименование товара</label>
							</div>
							<div class="col-bi">
								<input type="varchar" name="item_name" class="add-frame" value="<?php echo $item_name; ?>" placeholder="Наименование..." required="required">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="photo">Фото</label>
							</div>
							<div class="col-bi">
								<input type="varchar" name="photo" class="add-frame" value="<?php echo $photo; ?>" placeholder="Фото...">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="price">Баллы</label>
							</div>
							<div class="col-bi">
								<input type="varchar" name="price" class="add-frame" value="<?php echo $price; ?>" placeholder="Баллы..." required="required">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="item_inf">Информация о товаре</label>
							</div>
							<div class="col-bi">
								<input type="varchar" name="item_inf" class="add-frame" value="<?php echo $item_inf; ?>" placeholder="Информация..." required="required">
							</div>
					  </div>
					  
					  <div class="add-button">							
							<a href="delete_ps.php" class="knopka red">Удалить</a>
							<input type="submit" class="knopka" value="Сохранить" />
					  </div>
				  </form>
			</div>
		</div>
	</main>		
		

<?php include 'footer.php' ?>