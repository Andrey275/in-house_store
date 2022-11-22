<?php
session_start();
	print($_POST['name']);
	$info =  $_SESSION['info'];
    $fullname= $_POST['name'];
    $org_pas= $_POST['org_pas'];
    $user_information = $POST['inform'];

    $db = "shop_01";
	$connect = mysqli_connect('localhost', 'root', '', $db);
	mysqli_set_charset($connect, 'utf8');
	$update_info = "UPDATE user SET full_name='$fullname', org_pas= '$org_pas', user_information='$user_information' WHERE userID= '$info'";
	$update_balance = mysqli_query($connect, $update_info);	

	header('Location: index.php');
?>