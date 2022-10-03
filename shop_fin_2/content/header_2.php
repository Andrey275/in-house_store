<?php 
		session_start();
		#echo $_SESSION['org_pas'];
		$db = "shop_01";
		$connect = mysqli_connect('localhost', 'root', '', $db);;
		mysqli_set_charset($connect, 'utf8');
		$get_points = "SELECT points FROM user WHERE org_pas = '".$_SESSION['org_pas']."'";
		$point_count = mysqli_query($connect, $get_points);
		if(mysqli_num_fields($point_count) > 0){
			$points = mysqli_fetch_array($point_count);
			#echo $points[0];
		}else{
			$points = 0;
		}
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Syn-Shop</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
	<main>
		<div class="topdesk">
			<div class="head_box">
				<div class="head" style="font-weight:bold;"><a href="index.php"><p class="head">S-Shop</p></a></div>
				<div class="aut_head" style="font-weight:bold;"><p class="aut_head">Внутрикорпоративный магазин</p></a></div>
			
				<div class="row">
					<div class="inf_prof">
						<b> <?php echo $points[0]; ?></b>
					</div>
					<div class="head-inf_prof" style="font-weight:bold;">
						<label for="points">Баллов: </label>
					</div>
				</div>




				<div class="info-box">
						<div class="index-container">
							<a href="shop.php" class="knopka">Каталог</a>
							<a href="profile.php" class="knopka">Профиль</a>
						</div>
				</div>
			
			</div>
		</div>