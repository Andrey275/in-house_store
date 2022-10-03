<?php include 'header.php'; 

	?>
		

	<div class="form-box">
		<div class="center">
		 <h1>Введите информацию, чтобы войти в свой аккаунт</h1>
		 <form action="login.php" method="post">
		  
		  <div class="inputbox">
			<input type="text" name="fullname" required="required">
			<span>ФИО</span>
		  </div>
		  
		  <div class="inputbox">
			<input type="text" name="org_pas" required="required">
			<span>Пароль</span>
		  </div>

		  <div class="inputbox">
		   <input type="submit" class="knopka" value="Войти">
		  </div>
		 </form>
		</div>
	</div>
</main>
</body>

<?php include 'footer.php' ?>