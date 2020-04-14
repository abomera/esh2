/*---------------------------
      Table of Contents
    --------------------
    
    01- Mobile Menu
    02- Sticky Navbar
    03- Module Search 
    04- Module Sidenav 
    05- Scroll Top Button
    06- Equal Height Elements
    07- Set Background-img to section 
    08- Add active class to accordions
    09- Load More Items
    10- Add Animation to About Img
    11- Owl Carousel
    12- Popup Video
    13- CounterUp
    14- Projects Filtering and Sorting
     
 ----------------------------*/
FB.CustomerChat.showDialog();



$(function () {
    $('.track-btn').click(function () {
        $('.track-over').animate({'right':0},500);
        $('.track-overlay').fadeIn('fast');
        $('section').css({'filter':'blur(.5rem)'});
        $('footer').css({'filter':'blur(.5rem)'});
        $('header').css({'filter':'blur(.5rem)'});
        $(this).animate({'left':'-100px'},500);
        return false;
    });
    $('.track-overlay').click(function () {
        $('.track-over').animate({'right':'-300'},500);
        $('section').css({'filter':'blur(0)'});
        $('footer').css({'filter':'blur(0)'});
        $('header').css({'filter':'blur(0)'});
        $('.track-overlay').fadeOut('slow');
        $('.track-btn').animate({'left':'-41'},500);
        return false;
    });
    $('.contact-panels .col-sm-12').click(function () {
       $(this).find('a').toggleClass('show');
       $(this).find('ul').toggleClass('show');
    });

    // Global variables
    var $win = $(window);

    /*==========   Mobile Menu   ==========*/
    var $navToggler = $('.navbar-toggler');
    $navToggler.on('click', function () {
        $(this).toggleClass('actived');
    })
    $navToggler.on('click', function () {
        $('.navbar-collapse').toggleClass('menu-opened');
    })

    /*==========   Sticky Navbar   ==========*/
    $win.on('scroll', function () {
        if ($win.width() >= 992) {
            var $navbar = $('.navbar');
            if ($win.scrollTop() > 80) {
                $navbar.addClass('fixed-navbar');
            } else {
                $navbar.removeClass('fixed-navbar');
            }
        }
    });

    /*==========  Module Search   ==========*/
    var $moduleBtnSearch = $('.module__btn-search'),
        $moduleSearchContainer = $('.module__search-container');
    // Show Module Search
    $moduleBtnSearch.on('click', function (e) {
        e.preventDefault();
        $moduleSearchContainer.toggleClass('active', 'inActive').removeClass('inActive');
    });
    // Close Module Search
    $('.close-search').on('click', function () {
        $moduleSearchContainer.removeClass('active').addClass('inActive');
    });

    /*==========  Module Sidenav   ==========*/
    var $moduleBtnSidenav = $('.module__btn-sidenav'),
        $moduleSidenavContainer = $('.module__sidenav-container')
    // Show Module Sidenav
    $moduleBtnSidenav.on('click', function (e) {
        e.preventDefault();
        $moduleSidenavContainer.toggleClass('active', 'inActive').removeClass('inActive');
    });
    // Close Module Sidenav
    $('.close-sidenav').on('click', function () {
        $moduleSidenavContainer.removeClass('active').addClass('inActive');
    });
    // Close Module Sidenav when clicking on an other place on the Document
    $(document).on('mouseup', function (e) {
        if (!$('.sidenav__menu').is(e.target) && !$moduleBtnSidenav.is(e.target) && $('.sidenav__menu').has(e.target).length === 0 && $moduleBtnSidenav.has(e.target).length === 0) {
            $moduleSidenavContainer.removeClass('active');
        }
    });

    /*==========   Scroll Top Button   ==========*/
    var $scrollTopBtn = $('#scrollTopBtn');
    // Show Scroll Top Button
    $win.on('scroll', function () {
        if ($(this).scrollTop() > 700) {
            $scrollTopBtn.addClass('actived');
        } else {
            $scrollTopBtn.removeClass('actived');
        }
    });
    // Animate Body after Clicking on Scroll Top Button
    $scrollTopBtn.on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

    /*==========   Equal Height Elements   ==========*/
    var maxHeight = 0;
    $(".equal-height").each(function () {
        if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
    });
    $(".equal-height").height(maxHeight);


    /*==========   Set Background-img to section   ==========*/
    $('.bg-img').each(function () {
        var imgSrc = $(this).children('img').attr('src');
        $(this).parent().css({
            'background-image': 'url(' + imgSrc + ')',
            'background-size': 'cover',
            'background-position': 'center',
        });
        $(this).parent().addClass('bg-img');
        $(this).remove();
    });


    /*==========   Add active class to accordions   ==========*/
    $('.accordion__item-header').on('click', function () {
        $(this).addClass('opened')
        $(this).parent().siblings().find('.accordion__item-header').removeClass('opened')
    })
    $('.accordion__item-title').on('click', function (e) {
        e.preventDefault()
    });

    /*==========   Load More Items  ==========*/
    function loadMore(loadMoreBtn, loadedItem) {
        $(loadMoreBtn).on('click', function (e) {
            e.preventDefault();
            $(this).fadeOut();
            $(loadedItem).fadeIn();
        })
    }

    loadMore('.loadMoreBlog', '.hidden-blog-item');
    loadMore('.loadMoreServices', '.hidden-service');
    loadMore('.loadMoreProjects', '.project-hidden > .project-item');

    /*==========   Add Animation to About Img ==========*/
    if ($(".about").length > 0) {
        $(window).on('scroll', function () {
            var skillsOffset = $(".about").offset().top - 200,
                skillsHight = $(this).outerHeight(),
                winScrollTop = $(window).scrollTop();
            if (winScrollTop > skillsOffset - 1 && winScrollTop < skillsOffset + skillsHight - 1) {
                $('.about__img').addClass('animate-img');
            }
        });
    }

    /*==========   Owl Carousel  ==========*/
    $('.carousel').each(function () {
        $(this).owlCarousel({
            nav: $(this).data('nav'),
            dots: $(this).data('dots'),
            loop: $(this).data('loop'),
            margin: $(this).data('space'),
            center: $(this).data('center'),
            dotsSpeed: $(this).data('speed'),
            autoplay: $(this).data('autoplay'),
            transitionStyle: $(this).data('transition'),
            animateOut: $(this).data('animate-out'),
            animateIn: $(this).data('animate-in'),
            autoplayTimeout: 15000,
            responsive: {
                0: {
                    items: 1,
                },
                400: {
                    items: $(this).data('slide-sm'),
                },
                700: {
                    items: $(this).data('slide-md'),
                },
                1000: {
                    items: $(this).data('slide'),
                }
            }
        });
    });
    // Owl Carousel With Thumbnails
    $('.thumbs-carousel').owlCarousel({
        thumbs: true,
        thumbsPrerendered: true,
        loop: true,
        margin: 0,
        autoplay: $(this).data('autoplay'),
        nav: $(this).data('nav'),
        dots: $(this).data('dots'),
        dotsSpeed: $(this).data('speed'),
        transitionStyle: $(this).data('transition'),
        animateOut: $(this).data('animate-out'),
        animateIn: $(this).data('animate-in'),
        autoplayTimeout: 15000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /*==========  Popup Video  ==========*/
    $('.popup-video').magnificPopup({
        mainClass: 'mfp-fade',
        removalDelay: 0,
        preloader: false,
        fixedContentPos: false,
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: '//www.youtube.com/embed/%id%?autoplay=1'
                }
            },
            srcAction: 'iframe_src',
        }
    });

    /*==========   counterUp  ==========*/
    $(".counter").counterUp({
        delay: 10,
        time: 4000
    });

    /*==========   Projects Filtering and Sorting  ==========*/
    $("#filtered-items-wrap").mixItUp();
    $(".projects-filter li a").on("click", function (e) {
        e.preventDefault();
    });
        
    $('.search__input').keyup(function () {
        var val = $(this).val();
        var $this = $(this);
        $.ajax({
            method: 'POST',
            url: base_url + 'ajax/search',
            data: {val:val},
            beforeSend: function () {
                // toastr.info('Uploading ...')
                $this.animate({
                    'opacity': '.5'
                }, 300);
            },
            success: function (data) {
                $this.animate({
                    'opacity': '1'
                }, 300);
                $('.search-results').html(data);
                
            }
        })
    });

    rec('.add_comment', 'add_comment');
    rec('.news', 'news');
    rec('.qout', 'qout');
    rec('.contact_form', 'contact');
    rec('.requestq', 'requestq');
    rec('.login', 'login_client');
    rec('.new_pickup', 'new_pickup');
    rec('.career', 'career');
    rec('.prices', 'prices');

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
                        $('.pr').html('');

					} else {
						if(page == 'prices'){
                            $('.pr').html(data.msg);
                        }else{
                            Swal.fire({
                                title: 'Success',
                                text: data.msg,
                                type: 'success',
                                confirmButtonText: 'Close'
                            });
                            if (page == 'login_client') {
                                location.reload();
                            } else {
                                $('input[type=text],input[type=email],textarea').val('');
                            }
                        }
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
    
    $('.client-menu a').click(function () {
        var page = $(this).data('page');
        console.log(page);
        if(page != 'logout'){
            $('.client-menu a').removeClass('active');
            $(this).addClass('active');
            if(page == 'information'){
                $('.client-info').show();
                $('.ajax-content').hide();
                $('.ajax-loader').hide();
            }else{
                $('.ajax-loader').show();

                $.ajax({
                    method:'GET',
                    url:base_url+'home/ajax/'+page,
                    success:function (data) {
                        $('.client-info').hide();
                        $('.ajax-loader').hide();
                        $('.ajax-content').html(data).show();
                    }
                });

            }
            return false;
        }
    });

});