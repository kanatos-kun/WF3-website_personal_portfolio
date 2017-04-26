$(function(){
  $('.flexslider').flexslider({
    animation: "slide"
  });
  title()
  $('.bg-opa').on("mouseenter",function(){title();})
  $('.bg-opa').on("mouseleave",function(){title();})



})

function title(){
  	var a = [".thumb1",".thumb2",".thumb3",".thumb4"]

  	for(let i=0;i<a.length;i++){
			$(a[i]).on("mouseenter",function(){
			console.log("mouseenter");
			  $(a[i]+"+h3").on("mouseleave",function(){
			  	$(a[i]).removeClass("jsOpa");
			  })
			$(a[i]+'+h3').removeClass('thumbNailTitleOff');
			$(a[i]+'+h3').addClass('ThumbNailTitle');
			})

			$(a[i]).on("mouseleave",function(){
			console.log("Mouseleave");
			  $(a[i]+"+h3").on("mouseenter",function(){
			  	$(a[i]).addClass("jsOpa");
				$(a[i]+'+h3').removeClass('thumbNailTitleOff');
				$(a[i]+'+h3').addClass('ThumbNailTitle');
			  })
	  		$(a[i]+'+h3').addClass('thumbNailTitleOff');
	  		$(a[i]+'+h3').removeClass('ThumbNailTitle');
			})
  	}
}