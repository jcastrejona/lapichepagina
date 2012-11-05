$(".plop").mouseenter(function(){
	$(this).prev().slideDown("slow")
})

$(".plop").mouseout(function(){
	$(this).prev().slideUp("slow")
})