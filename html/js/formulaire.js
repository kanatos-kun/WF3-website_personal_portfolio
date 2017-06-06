$(function(){
	$("#Email").on('focusout',checkMail);
})

function checkMail(){
	var check = false;
	var longueur = $(this).val().length;

	if(longueur > 0 && 
	   longueur != undefined){
	   	var a = $(this).val()
		for(let i=0; i<longueur;i++){
			a[i]=="@"?check=true:"";
		}
	}

	if(!check){
	$(this).addClass("error-form");
	$(this).removeClass("valid-form");				
	}else{
	$(this).addClass("valid-form");
	$(this).removeClass("error-form");				
	}
}