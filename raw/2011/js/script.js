$(function(){
	var targetHeight = $("#main .right-col").height();
	if(targetHeight > $("#main .left-col").height()){
		$("#main .left-col").height(targetHeight);
		$("#main .mid-col").height(targetHeight-58);
	}else{
		$("#main .mid-col").height($("#main .left-col").height()-58);
		$("#main .right-col").height($("#main .left-col").height());
	}
	
	/* Random image picker */
	
	var rnd = Math.floor(Math.random() * (28-1+1) +1);
	
	$(".random-image").attr("src","images/gallery/image"+rnd+".jpg");
	
});
