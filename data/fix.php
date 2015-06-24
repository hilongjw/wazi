<?php
	include('connect.php');

	@$a = $_GET['a'];
	@$id = $_POST['id'];
	@$num = $_POST['num'];
	@$name = $_POST['name'];
	@$title = $_POST['title'];
	@$price = $_POST['price'];
	@$desct = $_POST['desct'];
	@$tel = $_POST['tel'];
	@$address = $_POST['address'];
	@$reco = $_POST['reco'];

	if($a=='item'){
		$sql = "UPDATE item SET num = '$num', name = '$name', title = '$title',price = '$price',desct = '$desct'
WHERE id = $id";
		if (!mysql_query($sql,$con)){
			$arr = array();
			$arr['success'] = 0;
			$arr['msg'] = mysql_error();
			echo json_encode($arr);
		  	die();
		  }else{
		  	$arr = array();
			$arr['success'] = 1;
			echo json_encode($arr);
		  }
	}else if($a =='reco'){
		$sql = "INSERT INTO reco (itemid) VALUES ('$id')";
		if (!mysql_query($sql,$con)){
			$arr = array();
			$arr['success'] = 0;
			$arr['msg'] = mysql_error();
			echo json_encode($arr);
		  	die();
		  }else{
			$arr = array();
			$arr['success'] = 1;
			echo json_encode($arr);
		  }
	}else if($a =='cancelreco'){
		$sql = "DELETE FROM reco WHERE itemid = '$id'";
		if (!mysql_query($sql,$con)){
			$arr = array();
			$arr['success'] = 0;
			$arr['msg'] = mysql_error();
			echo json_encode($arr);
		  	die();
		  }else{
			$arr = array();
			$arr['success'] = 1;
			echo json_encode($arr);
		  }
	}else{
		$arr = array();
			$arr['success'] = 0;
			echo json_encode($arr);
	}
mysql_close($con);
?>