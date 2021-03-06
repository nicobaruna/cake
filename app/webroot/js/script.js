$(document).ready(function(){
	// addMoreAndLessItem();
	countItem();
	deleteList();
	changeUnitLabel();
	addNewMessage();
	loadMessage();
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
		console.log(count);
		count = parseInt(count) - 1;
		if(count == 0){
			$count = 0;
		}
		var url = base+'/bigunits/view/'+id+'/'+count+'/'+model;
		$(this).closest('tr').addClass('current');
		$.get(url,function(data){
			console.log(model);
			$('.item.current .bigUnitColumn .select2-container').remove();
			$('.item.current .bigUnit').after(data).remove();
			
			$(".item.current select").select2();
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
		$(".item.newRow select").select2();
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


function addNewMessage(){
	var query = base+'/messages/add';
	console.log(query);
	$('form#newMessage').on('submit',function(e){
		e.preventDefault();
		$.ajax({
			url : query,
			data : $(this).serialize(),
			method : 'post',
		}).done(function(){
			$('form#newMessage').prepend('<div class="alert alert-success"><b>Success!</b><button type="button" class="close" data-dismiss="alert">×</button></div>');
		});
	});
}

//populate message
function populateMessage(){
	
}

//load message
function loadMessage(){
	$('.email-list-item').click(function(){
		$('.list-active').removeClass('list-active');
		$(this).addClass('list-active');
		$(this).find('.unread').remove();
		var msgId = $(this).data('id');
		$.get(base+'/messages/view/'+msgId,function(data){
			$('#messageBody').html('').append(data);
		});
	});
}


//populate bigUnits
function populateBigUnit(){
	$('.stock').change(populate);
}
