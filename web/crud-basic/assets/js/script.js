$(document).ready(function(){
	$(document).on('click', '.btn-delete', function(){
		var btnDelete = $(this),
			tableRow = $(this).closest('tr');
		$.ajax({
			url: "ajax/delete.php",
			method: 'POST',
			data: {
				id: btnDelete.data('id')
			}
		}).done(function(resp){
			if(resp.result){
				tableRow.remove();
			}
		})
	});
});