<?php  
	require('mysql.class.php');
	$my = new MySQL();
	function evaluate($stu_answers,$studentid,$quizid){
		$myo = new MySQL();
		$some = new MySQLi('localhost','root','root','codefundo');
		$res = $var->query("SELECT * FROM ".$quizid);
		$result;
		if($res){
			while($s = $res->fetch_object()){
				$result[$s->id] = $s->value;
				$marks[$s->id] = $s->marks;
			}
		}
		$mark = 0;
		foreach ($stu_answers as $quesid => $ans)
			if($result[$quesid]==$ans)	$mark+=$marks[$quesid];
		if($myo->Update($quizid,array('marks'=>$mark),array('student_id' => $studentid)))	print_r('Marks');
		else 	die('fatal');
	}
?>