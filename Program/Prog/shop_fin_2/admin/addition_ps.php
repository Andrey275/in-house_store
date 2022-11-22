<?php include 'header.php' ?>

		<div class="col">
			<div class="container">
				<form action="addition_ps-ok.php" method="post">
					  
					  <div class="row">
							<div class="col-sm">
								<label for="item_name">Наименование товара</label>
							</div>
							<div class="col-bi">
								<input type="text" name="item_name" class="add-frame" placeholder="Наименование..." required="required">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="photo">Фото</label>
							</div>
							<div class="col-bi">
								<input type="text" name="photo" class="add-frame" placeholder="Введите название картинки...">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="price">Баллы</label>
							</div>
							<div class="col-bi">
								<input type="text" name="price" class="add-frame" placeholder="Баллы..." required="required">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="item_inf">Информация о товаре</label>
							</div>
							<div class="col-bi">
								<input type="text" name="item_inf" class="add-frame" placeholder="Информация..." required="required">
							</div>
					  </div>
					  <div class="add-button">
							<input type="submit" class="knopka" value="Добавить"></td>
					  </div>
				  </form>
			</div>
		</div>
	</main>

<?php include 'footer.php' ?>