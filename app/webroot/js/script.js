$(document).ready(function(){
	addMoreAndLessItem();
});

String.prototype.allReplace = function(arr) {
	var retStr = this;
	for (var i = 0; i < arr.length; i += 2) {
		retStr = retStr.replace(new RegExp(arr[i], 'g'), arr[i + 1]);
	}
	return retStr;
};

function addMoreAndLessItem(){
	
	$('.more').click(function(){
		//get template
		console.log($('#item').data('indexnumber'));
		var number = parseInt($('#item').data('indexnumber'));
		
		var template = $('#item').html();
		//console.log(template.allReplace(['{number}',number]));
		$('.items').append(template.allReplace(['{number}',number]));
		$('#item').data('indexnumber',number+1);
	});
	
	$('.less').click(function(){
		var number = parseInt($('#item').data('indexnumber'));
		if(number > 1){
			$('#item').data('indexnumber',number-1);
			$('.items .wrapper').last().remove();
		}
	});
	
}
