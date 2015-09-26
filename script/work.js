$(function(){
	var i =0;
	var b = '<div id="text' + i+ '" class="text"><p id="text'+ i + '">Question</p><input type="text" id="text' + i + '" style="visibility:hidden" /><span class="btnedt"><a href="#" id="text' + i + '" class="non-active edlink">Edit</a></span><br></div>';
	$("#txtadd").click(function(){
		i++;
		$(".main").append('<div id="text' + i+ '" class="text"><p id="text'+ i + '">Question</p><input type="text" id="text' + i + '" style="visibility:hidden" /><span class="btnedt"><a href="#" id="text' + i + '" class="non-active edlink">Edit</a></span><br></div>');
		some();
	})
	$("#textadd").click(function(){
		i++;
		$(".main").append('<div id="text' + i+ '" class="text"><p id="text'+ i + '">Question</p><input type="text" id="text' + i + '" style="visibility:hidden" /><span class="btnedt"><a href="#" id="text' + i + '" class="non-active edlink">Edit</a></span><br></div>');
		some();
	})
	$("#optadd").click(function(){
		i++
		$(".main").append('<div id="opt'+i+'" class="option"><select id="opt'+i+'"><option>-Select-</option></select><p><span class="btnedt"><a href="#" id="opt'+i+'" class="edlink inact-opt"> Edit</a></span></p><br><div class="optlist" id="opt'+i+'"></div></div>');
		some();
	})
	$("#checkadd").click(function(){
		// console.log("shit");
		i++;
		$(".main").append('<div id="check'+i+'" class="check"><p id="check'+i+'">Question</p><input type="text" id="check'+i+'" style="visibility:hidden" /><span class="btnedt"><a href="#" id="check'+i+'" class="non-active edlink">Edit</a></span><br><br><div class="optlist" id="check'+i+'"><input type="text" placeholder="Enter value" id="check'+i+'"/><span class="btnedt"><a href="#" class="addopt" id="check'+i+'">add</a></span></div></div>');
		some();
	})
	$('#radadd').click(function(){
		i++;
		$(".main").append('<div id="radE'+i+'" class="rad"><p id="radE'+i+'">Type the main question:</p><input type="text" id="radE'+i+'" style="visibility:hidden" /><span class="btnedt"><a href="#" id="radE'+i+'" class="non-active edlink">Edit</a></span><br><br><div class="optlist" id="rad'+i+'"><input type="text" placeholder="Enter value" id="rad'+i+'"/><span class="btnedt"><a href="#" class="addopt" id="rad'+i+'">add</a></span></div></div>');
		some();	
	});
	function some(){
		$('.addopt').click(function(){
			console.log('some');
			var id = $(this).attr("id");
			var some;
			if($('.optlist#'+id).children('p').length > 0)
				some = $(".optlist#"+id).children("p").last().attr("id");
			else
				some = "0";
			var i = 1 + parseInt(some);
			$(".optlist#" + id).append("<p id='"+i+"'><span>"+($("input[type='text']#" + id).val())+ "</span><span class='btnedt'><a href='#' id='"+i +"' class='removeopt'>R.O.</a></span></p>");
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
				// console.log('fkghdfkj');
				$(this).removeClass("non-active");
				$(this).addClass("active");
				var some = $(this).attr("id");
				console.log(some);
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
				$(".optlist#"+some).append('<input type="text" placeholder="Enter value" id="'+some+'"/><a href="#" class="addopt" id="'+some+'">add</a>');
				for(var i=2;i<=len;i++)
					$(".optlist#" + some).append("<p id='"+i+"'><span>"+($("select#" + some).children("option:nth-of-type(" +i+ ")").html())+ "</span><a href='#' id='"+i +"' class='removeopt'>--</a></p>");
				$('.removeopt').click(function(){
					var some = $(this).attr("id");
					$("p#"+some).remove();
				});
				$('.addopt').click(function(){
					console.log('some');
					var id = $(this).attr("id");
					var some;
					if($('.optlist#'+id).children('p').length > 0)
						some = $(".optlist#"+id).children("p").last().attr("id");
					else
						some = "0";
					var i = 1 + parseInt(some);
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
		var body = "<div class='main'>";
		var text = 0;
		var check = 0;
		var textarea = 0;
		$('.main').children('div').each(function(){
			if($(this).hasClass('check')){
				console.log()
				var id = $(this).attr('id');
				var some = 0;
				check++;
				$('.optlist#'+id).children('p').each(function(){
					some++;
					body = body + '<label for="check'+check+some+'">' +($(this).children('span').html())+'</label>';
					body = body + '<input type="checkbox" name="check'+check+some+'" /><br>';
				})
			}else if($(this).hasClass('text')){
				var id = $(this).attr('id');
				body = body + '<p>'+ ($("p#"+id).html()) + '</p>';
				text++;
				body = body + '<input type="text" name="text'+(text)+'"/>';
			} else if($(this).hasClass('radio')){
				var id = $(this).attr('id');
				var some = 0;
				$('.optlist#'+id).children('p').each(function(){
					some++;
					body = body + '<label for="radio'+some+'">' +($(this).children('span').html())+'</label>';
					body = body + '<input type="radio" name="radio'+some+'" value="'+($(this).children('span').html())+'" /><br>';
				})
			} else if($(this).hasClass("textarea")){
				var id = $(this).attr("id");
				body = body + '<p>'+ ($("p#"+id).html()) + '</p>';
				textarea++;
				body = body + '<input type="text" value="text'+(textarea)+'"/>'; 
			}
			else if($(this).hasClass('option')){
				var id = $(this).attr('id');
				body = body + '<select>';
				body = body + $('select#'+id).html();
				body = body + '</select>';
			}
		});
		body = body + "</div>";
		$('input#body').val(body);
		console.log($('input#body').val());
		$('input#title').val($('title').html());
		$('input#stylesheet').val($('link').attr('href'));
		$('input#script').val($('script#main').attr('src'));
		// $('#target').submit();
	})
})