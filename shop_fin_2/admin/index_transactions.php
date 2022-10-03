<?php include 'header.php' ?>



					<div class="info-box">
						<div class="index-container">

								<form action="change_ps.php" method="post">
									<input type="int" name="tr-n_ID" maxlength="10" class="input-third_data" placeholder="ID транзакции"  >
									<input type="varchar" name="user_ID" maxlength="10" class="input-third_data" placeholder="ID работника" >
									<input type="varchar" name="chek" maxlength="20" class="input-points" placeholder="Счет" >
									<input type="int" name="tr-n_time" maxlength="15" class="input-third_data" placeholder="Время покупки" >
									<input type="varchar" name="item_ID" maxlength="10" class="input-third_data" placeholder="ID товара" value="Чич">
								</form>

						</div>
					</div>		

			
		


<?php include 'footer.php' ?>