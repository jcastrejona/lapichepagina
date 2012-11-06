$(document).ready(function(){
	$("#circle-menu").localScroll();
	
	drawcircle()
	hidecircle()
	
	$(".menu").click(function(){
		//setInterval(align,1)
		//setInterval(hidecircle,1)
	})
})

function drawcircle(){
	$('#circle-menu').circleMenu({
		item_diameter: 110,
		circle_radius: 200,
		direction: 'full',
		trigger:'hover',
		step_in: 50, 
		step_out: 50,
		close: function(){
			$(".menu").hide(200)
		},
		open: function(){
			$("#circle-menu .menu").show(500)
		}
	})
	align()
}

function align(){
	
	$("#circle-menu .menu").css({
		"margin-left" : ""+(document.documentElement.clientWidth/2-100)+"px",
		"margin-top"  : ""+(document.documentElement.clientHeight/2-75)+"px" 
	});
	
	$("#circle-menu .logo").css({
		"margin-left" : ""+(document.documentElement.clientWidth/2-150)+"px",
		"margin-top"  : ""+(document.documentElement.clientHeight/2-75)+"px" 
	});
}

function hidecircle(){
	$(".menu").hide()
	$("#circle-menu").mouseover(function(){
		$(".menu").show()
	})
}