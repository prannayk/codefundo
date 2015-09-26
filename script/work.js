$(function(){
	var i =2;
	var b = '<div id="text' + i+ '"><p id="text'+ i + '">Question</p><input type="text" id="text' + i + '" style="visibility:hidden" /><a href="#" id="text' + i + '" class="non-active edlink">Edit</a><br></div>';
	// var c = '<div id="opt1"><select id="opt1"><option>-Select-</option></select><p><a href="#" id="opt1" class='edlink inact-opt'>Edit</a></p><br><div class="optlist" id="opt1"></div></div>';
	var c = '<div id="check1"><p id="text1">Question</p><input type="text" id="text1" style="visibility:hidden" /><a href="#" id="text1" class="non-active edlink">Edit</a><br><br><div class="optlist" id="check1"><input type="text" placeholder="Enter value" id="check1"/><a href="#" class="addopt" id="check1">add</a></div></div>';
	$("#txtadd").click(function(){
		$(".main").append(b);
		some();
	})
	$("#optadd").click(function(){
		$(".main").append(c);
		some();
	})
	$("textadd").click(function(){
		$(".main").append(d);
		some();
	})
	function some(){
		$('.addopt').click(function(){
			var id = $(this).attr("id");
			var some;
			if($('.optlist#'+id).children('p').length > 0)
				some = $(".optlist#"+id).children("p").last().attr("id");
			else
				some = "0";
			var i = 1 + parseInt(some);
			console.log(i);
			$(".optlist#" + id).append("<p id='"+i+"'><span>"+($("input[type='text']#" + id).val())+ "</span><a href='#' id='"+i +"' class='removeopt'>--</a></p>");
			$("input[type='text']#" + id).val("");
			$('.removeopt').click(function(){
				var some = $(this).attr("id");
				$("p#"+some).remove();
			});
		});
		$('.removeopt').click(function(){
			var some = $(this).attr("id");
			$("p#"+some).remove();
		});
		$('.edlink').click(function(){
			if($(this).hasClass("non-active")){
				$(this).removeClass("non-active");
				$(this).addClass("active");
				var some = $(this).attr("id");
				$(this).html("Save");
				$("p#" + some).css("visibility","hidden");
				$("input#" + some).css("visibility","visible");
				$("input#" + some).val($("p#" + some).html());
			}
			else if($(this).hasClass("active")){
				var some = $(this).attr("id");
				$(this).removeClass("active");
				$(this).addClass("non-active");
				$(this).html("Edit");
				$("p#" + some).css("visibility","visible");
				$("input#" + some).css("visibility","hidden");
				$("p#" + some).html($("input#" + some).val());
			}
			else if($(this).hasClass("inact-opt")){
				$(this).removeClass("inact-opt");
				$(this).addClass("act-opt");
				$(this).html("Done");
				var some = $(this).attr("id");
				var len = $("select#" + some).children("option").length;
				$(".optlist#"+some).append('<input type="text" placeholder="Enter value" id="opt1"/><a href="#" class="addopt" id="opt1">add</a>');
				for(var i=2;i<=len;i++)
					$(".optlist#" + some).append("<p id='"+i+"'><span>"+($("select#" + some).children("option:nth-of-type(" +i+ ")").html())+ "</span><a href='#' id='"+i +"' class='removeopt'>--</a></p>");
				$('.removeopt').click(function(){
					var some = $(this).attr("id");
					$("p#"+some).remove();
				});
				$('.addopt').click(function(){
					var id = $(this).attr("id");
					if($('.optlist#'+id).children('p').length > 0)
						some = $(".optlist#"+id).children("p").last().attr("id");
					else
						some = "0";
			var i = 1 + parseInt(some);
					var i = 1 + parseInt(some);
					// console.log(i);
					$(".optlist#" + id).append("<p id='"+i+"'><span>"+($("input[type='text']#" + id).val())+ "</span><a href='#' id='"+i +"' class='removeopt'>--</a></p>");
					$("input[type='text']#" + id).val("");
					$('.removeopt').click(function(){
						var some = $(this).attr("id");
						$("p#"+some).remove();
					});
				});
			}
			else if($(this).hasClass("act-opt")){
				$(this).removeClass("act-opt");
				$(this).addClass("inact-opt");
				$(this).html("Edit");
				var some = $(this).attr("id");
				var len = $(".optlist#"+some).children("p").length;
				$("select#" + some).html(" ");
				$("select#" + some).append("<option>--Select--</option>");
				for(var i=1;i<=len;i++){
					var t = $(".optlist#"+some).children("p:nth-of-type("+ i+")").children("span").html();
					$("select#"+some).append("<option value="+t+">"+t+"</option>");
				}
				$(".optlist#"+some).html(" ");
			}
		});
	}
	some();
	$("#submit").click(function(){
		var body = "<div class='main'>"
		$("")
		body = body + "</div>";
	})
})







