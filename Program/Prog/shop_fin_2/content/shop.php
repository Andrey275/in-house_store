<?php include 'header_2.php' ?>
	





	<?php

	
		$db = "shop_01";
		$link = mysqli_connect('localhost', 'root', '', $db);
		mysqli_set_charset($link, 'utf8');
		$query3 = "SELECT * FROM items";
		$result3 = mysqli_query ($link, $query3);
		$n3 = mysqli_num_rows ($result3);
	?>
		

		<div class="form-box">
			<div class="center">
			 <h1>Все товары:</h1>
			</div>
		</div>
	

		<div class="column">
			<?php if ($result3) { ?>
				<?php for ($i3 = 0; $i3 <= $n3; $i3++) { ?>
					<div class="info-box">
						<hr align="center" width="100%" size="1" color="#0f0f0f" style="margin-bottom: 2em;" />
						<div class="index-container">

							<?php $row = mysqli_fetch_array($result3); ?>
								<?php if ($row) { ?>
								<form method="post" action="buy_page.php" class="index-container">

									<div class="img-container">
									<img class ="prod-img" src="<?=$row['photo']; ?>">
									</div>
									<div class="into-col">										
										<input type="text" disabled="" class="input-name" placeholder="Name" value="<?= $row['item_name']; ?>">											
										<textarea type="text" disabled="" color="#000" maxlength="160" class="input-char" placeholder="<?= $row['item_inf']; ?>"></textarea>
									</div>
									
										
										<div class="buy-box">
											<input type="text" name="price" class="input-price" placeholder="Price" value="<?= $row['price']; ?>"> б.
											<input type="hidden" name="prod_id" value="<?=$row['itemID']; ?>">	
											<input type="submit" value="Купить" class="knopka" >	

										</div>
									
									</form>

								<?php } ?>
								</div>
									
						</div>
							
				<?php } ?>
			<?php } ?>
			</div>
			</div>

			

		
		<?php mysqli_close ($link); ?>
	


<?php include 'footer.php' ?>