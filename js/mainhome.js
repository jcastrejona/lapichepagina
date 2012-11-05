$(document).ready(function(){
	
	$("#circle-menu").localScroll();
	
	drawcircle()
	hidecircle()
	
	$("#circle-menu").mouseover(function(){
		$(".menu").fadeIn("slow")
	})
	
	$(".menu").click(function(){
		setInterval(align,1)
		hidecircle()
	})
})

function drawcircle(){
	$('#circle-menu').circleMenu({
		item_diameter: 110,
		circle_radius: 200,
		direction: 'full',
		trigger:'hover',
		step_in: 100, 
		step_out: 100,
		close: function(){
			$(".menu").fadeOut(200)
		},
		open: function(){
			$("#circle-menu .menu").fadeIn(500)
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
}