$(document).ready(function(){
	// addMoreAndLessItem();
	countItem();
});

$(window).load(function(){
	moreAndLessItem();
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

// count items
function countItem(){
	var items = $('.item-table .item').length;
	$('.item-table').attr('data-items', items);
}

// add more or less item
function moreAndLessItem() {

	// more button function
	$('.btn.more').click(function(){
		var items = $('.item-table');
		var itemsTotal = $(items).attr('data-items');
		var itemTemplate = $('.item').html();
		
		$('.item-table tbody').append('<tr class="item">' + itemTemplate + '</tr>');

		$('.item-table').attr('data-items', (parseInt(itemsTotal) + 1));
	});

	// less button function
	$('.btn.less').click(function(){
		var items = $('.item-table');
		var itemsTotal = $(items).attr('data-items');
		if( itemsTotal > 1 ){
			$(items).find('.item:last-child').remove();
			$('.item-table').attr('data-items', (parseInt(itemsTotal) - 1));
		}
	});

}
