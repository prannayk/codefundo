$(function(){
	var b = '<p id="text1">Question</p>
<input type="text" id="text1" style="visibility:hidden" />
<a href="#" id="save-text1" class="non-active edlink">Edit</a>';
	$("#txtadd").click(function()){
		$("#main").append(b);
	}
	$(".edlink").click(function(){
		if($(this).hasClass("non-active")){
			$(this).removeClass("non-active");
			$(this).addClass("active");
			$(this).html("Save");
			$("p#text1").css("visibility","hidden");
			$("input#text1").css("visibility","visible");
			$("input#text1").val($("p#text1").html());
		}
		else if($(this).hasClass("active")){
			$(this).removeClass("active");
			$(this).addClass("non-active");
			$(this).html("Edit");
			$("p#text1").css("visibility","visible");
			$("input#text1").css("visibility","hidden");
			$("p#text1").html($("input#text1").val());
		}
	});
})