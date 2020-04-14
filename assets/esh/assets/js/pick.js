rec('.new_pickup', 'new_pickup');
rec('.fees', 'fees');
rec('.add_shipment', 'add_shipment');
function rec(form, page) {
	$(form).on('submit', function () {
		var data = new FormData(this);
		console.log(data);
		var $this = $(this);
		$.ajax({
			method: 'POST',
			url: base_url + 'ajax/' + page,
			data: data,
			dataType: 'json',
			processData: false,
			contentType: false,
			beforeSend: function () {
				// toastr.info('Uploading ...')
				$this.animate({
					'opacity': '.5'
				}, 300);
			},
			success: function (data) {
				// data = JSON.parse(data);
				if (data.success == false) {
					Swal.fire({
						title: 'Error!',
						html: data.msg,
						type: 'error',
						confirmButtonText: 'Close'
					});
				} else {
					
					if (page == 'fees') {
						$('.km').html(data.km);
						$('.df').html(data.df);
						$('.ewf').html(data.ewf);
						$('.codf').html(data.codf);
						$('.total').html(data.total);
                    }else{
                        Swal.fire({
                        	title: 'Success',
                        	text: data.msg,
                        	type: 'success',
                        	confirmButtonText: 'Close'
                        });
                    }
                    $('input[type=text],input[type=email],textarea').val('');
				}

				$this.animate({
					'opacity': 1
				}, 300);
			}
		});
		return false;
	});
}