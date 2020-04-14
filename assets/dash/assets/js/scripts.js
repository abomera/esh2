(function (window, undefined) {
	'use strict';
	console.log(page)
	if (page == 'edit_tour') {
		var gallery = $('.h-gallery').val().split(',');
	}
	/*
	NOTE:
	------
	PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
	WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */
	// nest
	// $('.dd').nestable({
	// 	maxDepth:10
	// });
	var updateOutput = function (e) {
		var list = e.length ? e : $(e.target),
			output = list.data('output');
		console.log(list.nestable('serialize'))
		$.ajax({
			method: "POST",
			url: base_url + "ajax/save_menu",
			data: {
				list: list.nestable('serialize')
			}
		}).fail(function (jqXHR, textStatus, errorThrown) {
			alert("Unable to save new list order: " + errorThrown);
		});
	};

	$('.dd').nestable({
		group: 1,
		maxDepth: 2,
	}).on('change', updateOutput);

	// nest

	var options = {
		chart: {
			height: 270,
			type: 'radialBar',
		},
		plotOptions: {
			radialBar: {
				size: 150,
				startAngle: -150,
				endAngle: 150,
				offsetY: 20,
				hollow: {
					size: '65%',
				},
				track: {
					// background: $white,
					strokeWidth: '100%',

				},
				dataLabels: {
					value: {
						offsetY: 30,
						color: '#99a2ac',
						fontSize: '2rem'
					}
				}
			},
		},
		// colors: [$danger],
		fill: {
			type: 'gradient',
			gradient: {
				// enabled: true,
				shade: 'dark',
				type: 'horizontal',
				shadeIntensity: 0.5,
				// gradientToColors: [$primary],
				inverseColors: true,
				opacityFrom: 1,
				opacityTo: 1,
				stops: [0, 100]
			},
		},
		stroke: {
			dashArray: 8
		},
		series: [93.45],
		labels: ['Completed Orders'],

	};

	var chart = new ApexCharts(document.querySelector("#chart"), options);
	chart.render();
	// tags
	var vval = $('.h-tags').val();
	if (vval == '' || vval == 'undefined') {

		var tags = [];
		var ar_tags = [];
	} else {
		if (page == 'edit_section' || page == 'edit_page' || page == 'edit_article' || page == 'edit_menu' || page == 'edit_tour' || page == 'edit_service') {
			var tags = vval.split(',');
			var ar_tags = vval.split(',');
		}

	}


	$('.v-tags').keydown(function (e) {
		if (page == 'add_section') {
			var lang = $(this).parent().parent().parent().parent().parent().data('lang');
		} else {
			var lang = 'English';
		}

		if (e.keyCode == 13) {
			if (lang == 'Arabic') {
				var vval = $(this).parent().find('.h-tags').val();
				ar_tags = vval.split(',');
				var val = $(this).val();
				var index = ar_tags.length;
				var n = ar_tags.includes(val);
				if (val != '' && n == false) {
					ar_tags.push(val.toString());
					// alert(ar_tags)
					$(this).parent().find('.h-tags').val(ar_tags);
					// console.log(ar_tags);
					$(this).parent().find('.tags').append('<span data-index="' + index + '"> ' + val + ' </span>');
				}
				$(this).val('');
			} else {
				var vval = $(this).parent().find('.h-tags').val();
				tags = vval.split(',');
				var val = $(this).val();
				var index = tags.length;
				var n = tags.includes(val);
				if (val != '' && n == false) {
					tags.push(val.toString());
					// alert(tags)
					$(this).parent().find('.h-tags').val(tags);
					$(this).parent().find('.tags').append('<span data-index="' + index + '"> ' + val + ' </span>');
				}
				$(this).val('');
			}
			return false;
		}
	});
	$('body').delegate('.tags span', 'click', function () {
		if (page == 'add_section') {
			var lang = $(this).parent().parent().parent().parent().parent().parent().data('lang');
		} else {
			var lang = 'English';
		}
		if (lang == 'Arabic') {
			var val = $(this).text();
			var i = ar_tags.indexOf(val.trim());
			ar_tags.splice(i, 1);
			$('.h-tags').val(ar_tags);
			console.log(i);
			console.log(ar_tags);
			$(this).remove();
		} else {
			var val = $(this).text();
			// alert(val)
			var i = tags.indexOf(val.trim());
			// alert(i)
			tags.splice(i, 1);
			$('.h-tags').val(tags);
			console.log(i);
			console.log(tags);
			$(this).remove();
		}


	});
	// tags

	// lang switch
	$('.lang').click(function () {
		var lang = $(this).data('lang');
		$('.lang-form').addClass('d-none');
		$('.lang-form[data-lang=' + lang + ']').removeClass('d-none');
		return false;
	});
	// lang switch

	// editor

	editor('.editor');
	editor('.editor2');
	editor('.editor3');
	editor('.editor4');
	editor('.editor5');
	editor('.editor6');
	editor('.editor7');
	editor('.editor8');

	function editor(btn) {
		var quill = new Quill(btn, {
			modules: {
				'syntax': true,
				'toolbar': [
					[{
						'font': []
					}, {
						'size': []
					}],
					['bold', 'italic', 'underline', 'strike'],
					[{
						'color': []
					}, {
						'background': []
					}],
					[{
						'script': 'super'
					}, {
						'script': 'sub'
					}],
					[{
						'header': '1'
					}, {
						'header': '2'
					}, 'blockquote', 'code-block'],
					[{
						'list': 'ordered'
					}, {
						'list': 'bullet'
					}, {
						'indent': '-1'
					}, {
						'indent': '+1'
					}],
					['direction', {
						'align': []
					}],
					['link', 'image', 'video', 'formula'],
					['clean']
				]
			},
			placeholder: 'Type here...',
			theme: 'snow'
		});

		$('.ql-editor').bind("DOMSubtreeModified", function () {
			$(this).parent().next().val($(this).html());
		});
	}

	// editor

	// link
	$('.title').on('input', function () {
		var val = $(this).val().toLowerCase().replace(/[^a-z0-9ا-ي]+/g, '-');
		if (val == '') {
			$(this).val('');
		} else {
			$(this).parent().parent().find('.link').val(val + '-' + (Math.round(Math.random() * 9000000)));
		}
	});

	// link


	// datatable
	$("table").DataTable();
	// datatable

	function multiReadURL(input) {
		$('.gallary-preview').html('');
		for (let i = 0; i < input.files.length; i++) {
			if (input.files && input.files[i]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					console.log(e.target.result)
					$('.gallary-preview').append(`
						<img src="` + e.target.result + `" class="img-fluid d-block mx-auto preview" style="height: 200px; object-fit: contain; margin-bottom: 10px; width: 100%;cursor:pointer;border:2px dashed #ccc;padding:10px" >
						<p class="text-center file-name" > ` + input.files[i].name + ` </p>
					`);
					// $(input).parent().parent().find('.preview').hide().attr('src', e.target.result).fadeIn();
					// $(input).parent().parent().find('.file-name').hide().html(input.files[i].name).fadeIn();
				};
				// console.log(input.files[0])
				reader.readAsDataURL(input.files[i]);
			} else {
				$('.gallary-preview').html('Click Here to select photos');
			}
		}

	}
	$(".gallary-inp").change(function () {
		multiReadURL(this);
	});

	$('.gallary-preview').on('click', function () {
		// alert(img)
		var img = $(this).parent().find('.gallary-inp');
		img.click();
	});

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$(input).parent().parent().find('.preview').hide().attr('src', e.target.result).fadeIn();
				$(input).parent().parent().find('.file-name').hide().html(input.files[0].name).fadeIn();
			};
			// console.log(input.files[0])
			reader.readAsDataURL(input.files[0]);
		}
	}

	$(".img-inp").change(function () {
		readURL(this);
	});

	$('.preview').on('click', function () {
		// alert(img)
		var img = $(this).parent().find('.img-inp');
		img.click();
	});


	// upload slider imgs start
	$('.add_slide').on('submit', function () {
		var data = new FormData(this);
		console.log(data);
		var $this = $(this);
		$.ajax({
			method: 'POST',
			url: base_url + 'ajax/add_slide',
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
						text: data.msg,
						type: 'error',
						confirmButtonText: 'Close'
					});
				} else {
					Swal.fire({
						title: 'Success',
						text: data.msg,
						type: 'success',
						confirmButtonText: 'Close'
					});
				}

				$this.animate({
					'opacity': 1
				}, 300);
			}
		});
		return false;
	});
	// upload slider imgs end

	// records function
	rec('.edit_slide', 'edit_slide');
	rec('.add_page', 'add_page');
	rec('.edit_page', 'edit_page');
	rec('.add_career', 'add_career');
	rec('.edit_career', 'edit_career');
	rec('.add_section', 'add_section');
	rec('.edit_section', 'edit_section');
	rec('.add_article', 'add_article');
	rec('.edit_article', 'edit_article');
	rec('.add_menu', 'add_menu');
	rec('.edit_menu', 'edit_menu');
	rec('.add_link_menu', 'add_link_menu');
	rec('.edit_link_menu', 'edit_link_menu');
	rec('.add_tour', 'add_tour');
	rec('.edit_tour', 'edit_tour');
	rec('.edit_pkg', 'edit_pkg');
	rec('.add_pkg', 'add_pkg');
	rec('.add_extra', 'add_extra');
	rec('.edit_extra', 'edit_extra');
	rec('.add_group', 'add_group');
	rec('.edit_group', 'edit_group');
	rec('.add_admin', 'add_admin');
	rec('.edit_admin', 'edit_admin');
	rec('.add_client', 'add_client');
	rec('.edit_client', 'edit_client');
	rec('.add_partner', 'add_partner');
	rec('.edit_partner', 'edit_partner');
	rec('.add_branch', 'add_branch');
	rec('.edit_branch', 'edit_branch');
	rec('.add_faq', 'add_faq');
	rec('.edit_faq', 'edit_faq');
	rec('.add_testimonial', 'add_testimonial');
	rec('.edit_testimonial', 'edit_testimonial');
	rec('.add_service', 'add_service');
	rec('.edit_service', 'edit_service');
	rec('.add_albom', 'add_albom');
	rec('.edit_albom', 'edit_albom');
	rec('.add_media', 'add_media');
	rec('.edit_media', 'edit_media');
	rec('.add_price', 'add_price');
	rec('.edit_price', 'edit_price');
	rec('.login', 'login');
	rec('.send', 'send');
	rec('.settings', 'settings');

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
						Swal.fire({
							title: 'Success',
							text: data.msg,
							type: 'success',
							confirmButtonText: 'Close'
						});
						if (page == 'edit_tour') {
							console.log(data.imgs);
							$('.gallery .row').html('');
							var imgs = data.imgs;
							gallery = imgs;
							for (var i = 0; i < imgs.length; i++) {
								var img = imgs[i];
								$('.gallery .row').append(`
									<div class="img col-md-3">
										<img src="` + base_url + img + `" alt="" class="frame img-fluid d-block">
										<a href="#" data-img="` + img + `" class="btn btn-danger btn-sm remove-img d-block">Remove this image</a>
									</div>
								`);
							}
							$('.h-gallery').val(imgs);
						}
						if (page == 'edit_pkg') {
							location.reload();
						}
						$('input[type=file]').val('')
						$('.gallary-preview').html('<h3>Empty :(</h3>')
					}

					$this.animate({
						'opacity': 1
					}, 300);
				}
			});
			return false;
		});
	}
	// records function

	// del function
	del('.del_slide', 'del_slide');
	del('.del_page', 'del_page');
	del('.del_section', 'del_section');
	del('.del_article', 'del_article');
	del('.del_comment', 'del_comment');
	del('.del_menu', 'del_menu');
	del('.del_tour', 'del_tour');
	del('.del_pkg', 'del_pkg');
	del('.del_child', 'del_child');
	del('.del_extra', 'del_extra');
	del('.del_group', 'del_group');
	del('.del_admin', 'del_admin');
	del('.del_rate', 'del_rate');
	del('.del_client', 'del_client');
	del('.del_partner', 'del_partner');
	del('.del_branch', 'del_branch');
	del('.del_news', 'del_news');
	del('.del_faq', 'del_faq');
	del('.del_testimonial', 'del_testimonial');
	del('.del_service', 'del_service');
	del('.del_albom', 'del_albom');
	del('.del_media', 'del_media');
	del('.del_career', 'del_career');
	del('.del_price', 'del_price');

	function del(btn, page) {
		$('body').delegate(btn, 'click', function () {
			var id = $(this).data('id');
			var $this = $(this);
			var r = confirm('Are you sure ?');
			if (r == true) {
				$.ajax({
					method: 'POST',
					url: base_url + 'ajax/' + page,
					data: {
						id: id
					},
					dataType: 'json',
					beforeSend: function () {
						// toastr.info('Uploading ...')
						if (page == 'del_menu') {

						} else {
							$this.parent().parent().fadeOut();
						}
					},
					success: function (data) {
						if (page == 'del_menu') {
							if (data.success == false) {
								Swal.fire({
									title: 'Error!',
									html: data.msg,
									type: 'error',
									confirmButtonText: 'Close'
								});
							} else {
								$this.parent().parent().parent().fadeOut();
							}
						} else if (page == 'del_child') {
							$this.parent().parent().parent().fadeOut();
						} else {
							$this.parent().parent().fadeOut();
						}
					}
				});
			}
			return false;
		});
	}
	// del function


	// remove ext
	var ext_num = 0;
	$('body').delegate('.remove-ext', 'click', function () {
		$(this).parent().parent().remove();
		--ext_num;
	});
	// remove pkg
	// add extra
	$('.add_extra').click(function () {
		++ext_num;
		$('.extras').prepend(`
			<div class="card">
				<div class="card-header">
					<b> Extra #` + ext_num + `</b> <a href="#" class="danger remove-ext">[Remove]</a>
				</div>
				<div class="card-con">
					
					<div class="form-group">
						<lable> Content </lable>
						<textarea name="extra_content[]"  cols="30" rows="4" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<lable> Arabic Content </lable>
						<textarea name="extra_ar_content[]"  cols="30" rows="4" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<lable> price </lable>
						<input type="text" name="extra_price[]" class="form-control price">
					</div>

				</div>
			</div>
		`);
	});
	// add extra

	// remove pkg
	var pkgs_num = 0;
	$('body').delegate('.remove-pkg', 'click', function () {
		$(this).parent().parent().remove();
		--pkgs_num;
	});
	// remove pkg
	// add new package
	$('.add_package').click(function () {
		++pkgs_num;
		$('.pkgs').prepend(`
			<div class="card">
			<div class="card-header">
				<b> Packages #` + pkgs_num + ` </b> <a href="#" class="danger remove-pkg">[Remove]</a>
			</div>
			<div class="card-con">
				<div class="form-group">
					<lable> Room Informations </lable>
					<textarea name="room[]" id="" cols="30" rows="4" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<lable> Type of stay </lable>
					<input type="text" name="stay[]" class="form-control">
					<input type="hidden" name="pkg_id[]" value="` + pkgs_num + `">
				</div>
				<div class="form-group">
					<lable> transportation </lable>
					<input type="text" name="trans[]" class="form-control">
				</div>
				<div class="form-group">
					<lable>Arabic Room Informations </lable>
					<textarea name="ar_room[]" cols="30" rows="4" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<lable>Arabic Type of stay </lable>
					<input type="text" name="ar_stay[]"  class="form-control">
				</div>
				<div class="form-group">
					<lable>Arabic Transportation </lable>
					<input type="text" name="ar_trans[]" class="form-control">
				</div>
				<div class="form-group">
					<lable> Single room price </lable>
					<input type="number" name="single[]" class="form-control">
				</div>
				<div class="form-group">
					<lable> Double room price </lable>
					<input type="number" name="dub[]" class="form-control">
				</div>
				<div class="form-group">
					<lable> Triple room price </lable>
					<input type="number" name="treb[]" class="form-control">
				</div>
				<div class="form-group">
					<lable> Max Adults</lable>
					<select name="max_adults[]" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
				</div>
				<div class="form-group">
					<lable> Max children</lable>
					<select name="max_kids[]" class="form-control max-kids">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
				</div>
				<div class="kids" data-parent="` + pkgs_num + `">
					
				</div>
				<div class="form-group">
					<lable> Number of nights </lable>
					<input type="number" name="nights[]" class="form-control">
				</div>
				<div class="form-group">
					<lable> Times </lable>
					<textarea name="times[]" cols="30" rows="4" class="form-control"></textarea>
				</div>
			</div>
		</div>
			`);
	});
	// add new package

	// max kids
	$('body').delegate('.max-kids', 'change', function () {
		var val = $(this).val();
		$(this).parent().parent().find('.kids').html('');
		for (let i = 0; i < val; i++) {
			var parent = $(this).parent().parent().find('.kids').data('parent');
			$(this).parent().parent().find('.kids').append(`
			<div class="form-group" >
				<div class="row" >
					<div class="col-12" > Child #` + (i + 1) + ` <br> </div> 
					<div class = "col-2" >
						<label> Age From </label> 
						<select name = "age_from[]" class="form-control" >
							<option value = "1" > 1 </option> 
							<option value = "2" > 2 </option> 
							<option value = "3" > 3 </option> 
							<option value = "4" > 4 </option> 
							<option value = "5" > 5 </option> 
							<option value = "6" > 6 </option> 
							<option value = "7" > 7 </option> 
							<option value = "8" > 8 </option> 
							<option value = "9" > 9 </option> 
							<option value = "10" > 10 </option> 
							<option value = "11" > 11 </option> 
							<option value = "12" > 12 </option> 
						</select> 
					</div> 
					<div class="col-2" >
						<label> Age To </label> 
						<select name = "age_to[]" class="form-control" >
							
							<option value="1"> 1 </option> 
							<option value="2"> 2 </option> 
							<option value="3"> 3 </option> 
							<option value="4"> 4 </option> 
							<option value="5"> 5 </option> 
							<option value="6"> 6 </option> 
							<option value="7"> 7 </option> 
							<option value="8"> 8 </option> 
							<option value="9"> 9 </option> 
							<option value="10"> 10 </option> 
							<option value="11"> 11 </option> 
							<option value="12"> 12 </option> 
						</select> 
					</div> 
					<div class="col-5">
						<label> Price </label> 
						<input type="number" value="0" placeholder="if If the room rate is free, write zero" name="child_price[]" class="form-control" >
						<input type="hidden" value="` + (parent) + `" name="parent[]" class="form-control" >
						<input type="hidden" value="` + (i + 1) + `" name="child_num[]" class="form-control" >
					</div> <hr>
				</div> 
			</div>
			`);
		}
	});
	// max kids

	// max kids
	$('body').delegate('.edit-max-kids', 'change', function () {
		var val = $(this).val();
		var real_kids = $('.real-kids').data('child-num');
		$(this).parent().parent().find('.edit_kids').html('');
		for (let i = real_kids; i < val; i++) {
			var parent = $(this).parent().parent().find('.edit_kids').data('parent');
			$(this).parent().parent().find('.edit_kids').append(`
			<div class="form-group" >
				<div class="row" >
					<div class="col-12" > Child #` + (i + 1) + ` <br> </div> 
					<div class = "col-2" >
						<label> Age From </label> 
						<select name = "age_from[]" class="form-control" >
							<option value = "1" > 1 </option> 
							<option value = "2" > 2 </option> 
							<option value = "3" > 3 </option> 
							<option value = "4" > 4 </option> 
							<option value = "5" > 5 </option> 
							<option value = "6" > 6 </option> 
							<option value = "7" > 7 </option> 
							<option value = "8" > 8 </option> 
							<option value = "9" > 9 </option> 
							<option value = "10" > 10 </option> 
							<option value = "11" > 11 </option> 
							<option value = "12" > 12 </option> 
						</select> 
					</div> 
					<div class="col-2" >
						<label> Age To </label> 
						<select name = "age_to[]" class="form-control" >
							
							<option value="1"> 1 </option> 
							<option value="2"> 2 </option> 
							<option value="3"> 3 </option> 
							<option value="4"> 4 </option> 
							<option value="5"> 5 </option> 
							<option value="6"> 6 </option> 
							<option value="7"> 7 </option> 
							<option value="8"> 8 </option> 
							<option value="9"> 9 </option> 
							<option value="10"> 10 </option> 
							<option value="11"> 11 </option> 
							<option value="12"> 12 </option> 
						</select> 
					</div> 
					<div class="col-5">
						<label> Price </label> 
						<input type="number" value="0" placeholder="if If the room rate is free, write zero" name="child_price[]" class="form-control" >
						<input type="hidden" value="` + (parent) + `" name="parent[]" class="form-control" >
						<input type="hidden" value="` + (i + 1) + `" name="child_num[]" class="form-control" >
					</div> <hr>
				</div> 
			</div>
			`);
		}
	});
	// max kids



	// gallery
	// remove img
	$(document).delegate('.remove-img', 'click', function () {
		var img = $(this).data('img');
		var $this = $(this);
		var id = $('.id').val();
		if (gallery.includes(img) || gallery.length == 0) {
			var con = confirm('Are you sure ?');
			if (con) {
				var i = gallery.indexOf(img);
				gallery.splice(i, 1);
				// console.log(gallery)
				$('.h-gallery').val(gallery);
				$.ajax({
					method: 'POST',
					url: base_url + 'ajax/del_img',
					data: {
						img: img,
						gallery: gallery,
						id: id
					},
					success: function () {
						$this.parent().remove();
					}
				});
			}
		}
		return false;
	});
	// remove img
	// gallery

	// menus
	$('.type').change(function () {
		var val = $(this).val();
		if (val == 0 || val == 1) {
			$('.normal-link').show();
			$('.title').show();
		}else{
			$('.normal-link').hide();
			$('.title').hide();
		}
	});
	$('.for').change(function () {
		var val = $(this).val();
		if(val != 0){
			$('.link').hide();
		}else{
			$('.link').show();
		}
	});
	// menus
		

})(window);
