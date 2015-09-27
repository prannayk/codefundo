<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<title>Interface Addition</title>
	<script type="text/javascript" src="script/jq.js"></script>
	<script type="text/javascript">
	$(function(){
		$('#works').click(function(){
			var some = $('#shit option:selected').val();
			if(some=="grader"){
				$('.main').removeClass('hidden');
			}
		});
		var len = $('.main').children('input').length;
		for(var i =1;i<=len;i++){
			var text = $('.main').children('input:nth-of-type('+i+')').attr('name');
			$("#marks").append("<label for="+text+">Marks for Question"+i+"</label><input type='text' name='"+text+"'' /><br>");
		}
		$("#marks").append("<input type='submit'/>");
		$("#rolling").click(function(){
			$("#marks").submit();
		})
	})
	</script>
</head>
<body>
<p>Page1</p>
<select id="shit" form="knotshit">
	<option>-SELECT-</option>
	<option value="grader">grader</option>
</select>
<a href="#" id="works">GO</a>
<div class="main">
<p>Give the correct answers</p>
<!--form method="POST" action="answers.php"-->
<?php  
	$mys = new MySQLi('localhost','root','root','codefundo');
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
	echo $result['body'];
?>
<!--</form-->
<form method="GET" action="marks.php" id="marks">
</form>
</div>
</body>
</html>
