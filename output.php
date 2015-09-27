<?php 
	$mys = new MySQLi('localhost','root','root','codefundo');
	if(isset($_GET['pagekey'])){
		$g = $_GET['pagekey'];
		$q = "SELECT * FROM code WHERE id=".$g;
		$res = $mys->query($q) or die('fatal');
		$result = array();
		if($res){
			while($s = $res->fetch_object()){
				$result['title'] =	$s->title;		
				$result['stylesheet'] =	$s->stylesheet;
				$result['body'] =	$s->body;
				$result['script'] =	$s->script; 
			}
		}
	}else if(isset($_GET['viewkey'])){
		$g = $_GET['viewkey'];
		$q = "SELECT * FROM code WHERE `tit`='".$g."'";
		$res = $mys->query($q) or die('fatal');
		$result = array();
		if($res){
			while($s = $res->fetch_object()){
				$result['title'] =	$s->title;		
				$result['stylesheet'] =	$s->stylesheet;
				$result['body'] =	$s->body;
				$result['script'] =	$s->script; 
			}
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $result['title']; ?></title>
 	<link rel="stylesheet" type="text/css" href="<?php echo $result['stylesheet']; ?>">
 </head>
 <body>
 	<form action="submit.php" method="POST">
 		<?php echo $result['body']; ?>
 		<input type="submit" />
 	</form>
 </body>
 </html>