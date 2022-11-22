<?php include 'header_2.php'; 



?>
	
<?php	
		if(isset($_POST['price'])){
			$price = $_POST['price'];

		}else{
			echo 'Nema';
		};
		
		#echo $_SESSION['org_pas'];
		$db = "shop_01";
		$connect = mysqli_connect('localhost', 'root', '', $db);;
		mysqli_set_charset($connect, 'utf8');
		$get_points = "UPDATE user SET points=points-$price WHERE org_pas = '".$_SESSION['org_pas']."'";
		$update_balance = mysqli_query($connect, $get_points);	
?>	
		<div class="bpg">
			<p class="inf_page" >Спасибо за покупку! </p>
			<p class="inf_page" >Можете забрать заказ у директора </p>
		</div>
	</main>
	
<?php include 'footer.php' ?>