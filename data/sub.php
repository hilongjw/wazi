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

 
    if($a =='add'){
    	$time =time();        //获得当前时间戳
		$files1 =$_POST['pic'];

	    $files = substr($files1,22);  

		 //解码
		 $tmp  = base64_decode($files);
		 $fp="../uploads/".$time.".jpg";
		 //写文件
		 file_put_contents( $fp, $tmp);
		 $img = "uploads/".$time.".jpg";

		 

		$sql = "INSERT INTO item (num, name, title,price,pic,desct) VALUES ('$num', '$name', '$title','$price','$img' ,'$desct')";

		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		
		mysql_close($con);
		 $arr = array();
		$arr['success'] = 1;
		$arr['image'] = $img;
		$arr['time'] = $time;
		echo json_encode($arr);
    }else if($a =='order'){
    	$sql = "INSERT INTO orderlist (itemId, numb, tel, addrs, wait) VALUES ('$id', '$num', '$tel', '$address','wait')";
    	if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		
		mysql_close($con);
		 $arr = array();
		$arr['success'] = 1;
		echo json_encode($arr);
    }else if($a =='news'){
    	$sql = "INSERT INTO news (title, desct) VALUES ('$title','$desct')";
    	if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		
		mysql_close($con);
		 $arr = array();
		$arr['success'] = 1;
		echo json_encode($arr);
    }else{
    	exit();
    }
   
 
   
         

?> 