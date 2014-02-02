$(document).ready(function(){
	// addMoreAndLessItem();
	countItem();
	deleteList();
	changeUnitLabel();
	populateBigUnit();
});

$(window).load(function(){
	moreAndLessItem();
});

function populate(){
		var id = $('option:selected',this).val();
		console.log(id);
		var count = $('.item-table').attr('data-items');
		var model = $('#item').data('model');
		var url = base+'/bigunits/view/'+id+'/'+(count-1)+'/'+model;
		$(this).closest('tr').addClass('current');
		$.get(url,function(data){
			console.log(data);
			$('.item.current .bigUnit').after(data).remove();
			$('.item.current').removeClass('current');
		});
}

$(document).on("change",".stock",populate);

String.prototype.allReplace = function(arr) {
	var retStr = this;
	for (var i = 0; i < arr.length; i += 2) {
		retStr = retStr.replace(new RegExp(arr[i], 'g'), arr[i + 1]);
	}
	return retStr;
};

//change unit label
function changeUnitLabel(){
	$('select.unit').change(function(){
		$('.unitLabel').text($('option:selected',this).text());
	});
}

// count items
function countItem(){
	var items = $('.item-table .item').length;
	$('.item-table').attr('data-items', items);
	$('.item-table').attr('data-total', items);
}

//delete tr from item list
function deleteList(){
	$('.delete').click(function(event){
		console.log('test');
		event.preventDefault();
		var url = $(this).attr('href')+'.json';
		$(this).closest('tr').addClass('current');
		var r=confirm("are you sure wnt to delete this ?");
		if(r == true){
			$.get(url,function(data){
				console.log(data.message.message);
				if(data.message.message === 1){
					console.log($(this).text());
					if($('.item-table').data('items') > 1){
						$('tr.item.current').remove();
						$('.item-table').attr('data-items', (parseInt(itemsTotal) - 1));
					}else{
						$('tr.item.current input , tr.item.current input select').val('');
						$(items).find('.item:last-child a.delete').remove();
						$('tr.item.current').removeClass('current');
					}
				}
			});
		}
	});
}

// add more or less item
function moreAndLessItem() {

	// more button function
	$('.btn.more').click(function(){
		var items = $('.item-table');
		var itemsTotal = $(items).attr('data-items');
		var itemTemplate = $('#item .item ').html();
		itemTemplate = itemTemplate.allReplace(['{number}',itemsTotal]);
		//itemTemplate = itemTemplate.replace('{number}',itemsTotal);
		console.log(itemTemplate);
		$('.item-table tbody').append('<tr class="item newRow">' + itemTemplate + '</tr>');
		$(items).find('.item:last-child input,.item:last-child select').val('');
		$(items).find('.item:last-child a.delete').remove();
		$('.item-table').attr('data-items', (parseInt(itemsTotal) + 1));
	});

	// less button function
	$('.btn.less').click(function(){
		var items = $('.item-table');
		console.log('masuk');
		var itemsTotal = $(items).attr('data-items');
		if( itemsTotal > $(items).attr('data-total') ){
			$(items).find('.item.newRow:last-child').remove();
			$('.item-table').attr('data-items', (parseInt(itemsTotal) - 1));
			
		}
	});

}



//populate bigUnits
function populateBigUnit(){
	$('.stock').change(populate);
}
