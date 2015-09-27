<!DOCTYPE html>
<html>
<head>
	<title>Submit</title>
</head>
<body>

<?php 
	require('mysql.class.php');
	$s = array('text1'=>'sldkfj','text2'=>'alkdjs','text3'=>'asjdlksa');
	$id = 12;
	$quizid = 4;
	function evaluate($stu_answers,$studentid,$quizid){
		// $myo = new MySQL();
		$some = new MySQLi('localhost','root','root','codefundo');
		$res = $some->query("SELECT * FROM answers") or die('fatal');
		$res2 = $some->query("SELECT * FROM marks") or die('fatal');
		// print_r($res2);
		$result = array();
		$marks = array();
		if($res)
			while($s = $res->fetch_object())
				foreach ($s as $key => $value)
					if($s->$key)
						$result[$key] = $value;
		if($res2)
			while($s = $res2->fetch_object())
				foreach ($s as $key => $value)
					if($s->$key)
						$marks[$key] = $value;
		unset($result['quizid']);
		$mark = 0;
		foreach ($stu_answers as $quesid => $ans)
			if($result[$quesid]==$ans)	$mark+=$marks[$quesid];
		// var_dump($mark);
		echo 'Score is:';
		echo $mark;
		echo '<Br><a href="dash.php">Continue-></a>';
		if($myo->Update($quizid,array('marks'=>$mark),array('student_id' => $studentid)))	print_r('Marks');
		else 	die('fatal');
	}
	// evaluate($s,$id,$quizid);
	// include('mathing.php');
	$my = new MySQL();
	$name = $_POST['title'];
	unset($_POST['title']);
	$i = 1;
	$in =  array();
	// var_dump($_POST);
	// print_r('expression');
	foreach ($_POST as $key => $value) {
		$ss = 'col'.$i;
		$i++;
		$in[$ss] = $value;
	}
	evaluate($_POST,12,4);
	// var_dump($in);
	// if($my->Insert($name,$in))
	// 	print_r('<p>Response Recorded!</p>');
	// header("Location: dash.php");
 ?>


</body>
</html>