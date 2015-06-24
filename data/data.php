<?php 
	include('connect.php');
	@$a = $_GET['a'];
	@$id = intval($_GET['id']);
	@$last = intval($_GET['last']);
	@$amount = intval($_GET['amount']);



	if($a == 'list' ){
	    $result = mysql_query("select * FROM item order by id desc limit $last,$amount");
	    $modle = 'item';
	}else if($a =='item'){
		$result = mysql_query("select * FROM item where id = '$id' ");
		$modle = 'item';
	}else if($a =='order'){
		$sql="SELECT orderlist.id, orderlist.itemId, orderlist.numb,orderlist.tel,orderlist.addrs,orderlist.wait,item.name,item.id FROM orderlist INNER JOIN item ON orderlist.itemId = item.id ORDER BY orderlist.id";
		$result = mysql_query($sql,$con);
		$modle = 'order';
	}else if($a=='reco'){
		$sql="SELECT reco.id, reco.Itemid, item.num, item.name, item.title,item.price,item.pic,item.desct FROM reco INNER JOIN item ON reco.itemId = item.id ORDER BY reco.id";
		$result = mysql_query($sql,$con);
		$modle = 'item';
	}else if($a=='news'){
		$sql = "select * FROM news order by id desc limit 0,1";
		$result = mysql_query($sql,$con);
		$modle = "news";
	}else{
		exit();
	}

	if($a !==null&&$modle == 'order'){
		while($row = mysql_fetch_array($result)){
		   $list[] = array(
		   		'error'=>'false',
		        'id' => $row['id'],
		        'itemId' => $row['itemId'],
		        'numb' => $row['numb'],
		        'tel'=>$row['tel'],
		        'add'=>$row['addrs'],
		        'state'=>$row['wait'],
		        'name'=>$row['name']
		    );
		}
	}else if($a !==null&&$modle == 'item'){
		while($row = mysql_fetch_array($result)){
			$pic = explode(',',$row['pic']);
		   $list[] = array(
		   		'error'=>'false',
		        'id' => $row['id'],
		        'num' => $row['num'],
		        'name' => $row['name'],
		        'title'=>$row['title'],
		        'price'=>$row['price'],
		        'desct'=>$row['desct'],
		        'pic'=>$pic
		    );
		}
	}else if($a !== null&&$modle == 'news'){
		while($row = mysql_fetch_array($result)){
		   $list[] = array(
		   		'error'=>'false',
		        'id' => $row['id'],
		        'title'=>$row['title'],
		        'desct'=>$row['desct']
		    );
		}
	}else{
		exit();
	}
	if(@$list == null){
		$list[] = array(
		   		'error'=>'true'
		   		);
	}
	mysql_close($con);
	echo json_encode($list);

?>