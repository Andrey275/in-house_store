<?php include 'header.php' ?>

		<div class="col">
			<div class="container">
				<form action="addition-ok.php" method="post">
					  <div class="row">
							<div class="col-sm">
								<label for="fullname">ФИО работника</label>
							</div>
							<div class="col-bi">
								<input type="text" name="fullname" class="add-frame" placeholder="Работник..." required="required">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="org_pas">Пароль</label>
							</div>
							<div class="col-bi">
								<input type="text" name="org_pas" class="add-frame" placeholder="Пароль..." required="required">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="points">Баллы</label>
							</div>
							<div class="col-bi">
								<input type="text" name="points" class="add-frame" placeholder="Баллы..." required="required">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="user_inf">Информация о пользователе</label>
							</div>
							<div class="col-bi">
								<input type="text" name="user_inf" class="add-frame" placeholder="Информация...">
							</div>
					  </div>
					  
					  <div class="row">
							<div class="col-sm">
								<label for="picture">Фото</label>
							</div>
							<div class="col-bi">
								<input type="text" name="picture" class="add-frame" placeholder="Введите название картинки...">
							</div>
					  </div>

					  <div class="row">
							<div class="col-sm">
								<label for="role">Должность</label>
							</div>
							<div class="col-bi">
								<input type="text" name="role" class="add-frame" placeholder="Должность...">
							</div>
					  </div>
					  <div class="row">
							<div class="col-sm">
								<label for="tg_ID">Телеграм-ID</label>
							</div>
							<div class="col-bi">
								<input type="text" name="tg_ID" class="add-frame" placeholder="Телеграм-ID...">
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