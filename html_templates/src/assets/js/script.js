$(document).ready(function () {
	$('select').niceSelect();
});
///
$(document).on('click', '[data-toggle="lightbox"]', function (event) {
	event.preventDefault();
	$(this).ekkoLightbox();
});


///
$(function () {
	$('.slider-banner').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		autoplay: false,
		autoplaySpeed: 4000,
		swipe: false,
		speed: 900,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    touchThreshold: 100
	});


	$('.product-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		autoplay: false,
		autoplaySpeed: 4000,
		speed: 900,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    touchThreshold: 100,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});


	$('.home-banner-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		autoplay: false,
		autoplaySpeed: 4000,
		swipe: false,
		speed: 900,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    touchThreshold: 100
	});


	$('.partners__main__content__slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		autoplay: false,
		autoplaySpeed: 2000,
		swipe: false,
		speed: 900,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    touchThreshold: 100,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

	$('.unique-baths__main').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		autoplay: false,
		autoplaySpeed: 4000,
		swipe: true,
		speed: 900,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    touchThreshold: 100
	});


	$('.certificate-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		autoplay: false,
		autoplaySpeed: 4000,
		speed: 900,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    touchThreshold: 100
	});

});



///
	$('.counter__ctrl').on('click', function (e) {
		e.preventDefault();
		var currentItemCount = $(this).parent().find('input').val();
		if ($(this).hasClass('counter__ctrl--less') && currentItemCount > 1)--currentItemCount;
		else if ($(this).hasClass('counter__ctrl--more'))++currentItemCount;
		$(this).parent().find('input').val(currentItemCount);
	});

	$('.certificate__arrows__left').click(function () {
		$('.certificate-slider').slick('slickPrev');
	});

	$('.certificate__arrows__right').click(function () {
		$('.certificate-slider').slick('slickNext');
	});

///
	var list = $(".review-client__main__item__info-client");
	var numToShow = 8;
	var button = $("#next");
	var numInList = list.length;
	list.hide();
	if (numInList > numToShow) {
		button.show();
	}
	list.slice(0, numToShow).show();
	
	button.click(function(){
			var showing = list.filter(':visible').length;
			list.slice(showing - 1, showing + numToShow).fadeIn();
			var nowShowing = list.filter(':visible').length;
			if (nowShowing >= numInList) {
				button.hide();
			}
	});




///
$("ul li:has(ul)").addClass("has-submenu");
$("ul li ul").addClass("sub-menu");
$("ul.dropdown li").hover(function () {
	$(this).addClass("hover")
}, function () {
	$(this).removeClass("hover")
});
var $menu = $("#menu"), $menulink = $("#spinner-form"), $search = $("#search"), $search_box = $(".search_box"),
	$menuTrigger = $(".has-submenu > a");
$menulink.click(function (e) {
	$menulink.toggleClass("active");
	$menu.toggleClass("active");
	if ($search.hasClass("active")) {
		$(".menu.active").css("padding-top", "50px")
	}
});
$search.click(function (e) {
	e.preventDefault();
	$search_box.toggleClass("active")
});
$menuTrigger.click(function (e) {
	e.preventDefault();
	var t = $(this);
	t.toggleClass("active").next("ul").toggleClass("active")
});
$("ul li:has(ul)");
$(function () {
	var e = $(document).scrollTop();
	var t = $(".nav_wrapper").outerHeight();
	$(window).scroll(function () {
		var n = $(document).scrollTop();
		if ($(document).scrollTop() >= 50) {
			$(".nav_wrapper").css("position", "fixed")
		} else {
			$(".nav_wrapper").css("position", "fixed")
		}
		if (n > t) {
			$(".nav_wrapper").addClass("scroll")
		} else {
			$(".nav_wrapper").removeClass("scroll")
		}
		if (n > e) {
			$(".nav_wrapper").removeClass("no-scroll")
		} else {
			$(".nav_wrapper").addClass("no-scroll")
		}
		e = $(document).scrollTop()
	})
});




///
	$('.file-upload').hide();
  $('#file-upload1').show();

  $('.reveal-file').click(function(event) {
    $('#file-upload2').show();
    $(this).click(function(event) {
      $('#file-upload3').show();
      $(this).hide();
    })
  })


$('.image-box').click(function(event) {
  var imgg = $(this).children('img');
  $(this).siblings().children("input").trigger('click');  

  $(this).siblings().children("input").change(function() {
    var reader = new FileReader();

    reader.onload = function (e) {
      var urll = e.target.result;
      $(imgg).attr('src', urll);
      imgg.parent().css('background','transparent');
			imgg.show();
      imgg.siblings('p').hide();
      imgg.siblings('i').hide();
      imgg.siblings('a').hide();
			
    }
    reader.readAsDataURL(this.files[0]);
  }); 
});




///
$(".signin").on("click", function () {
	$('#myModal1').modal('hide');
});




///
$('.b-question').on('click', function (e) {
	e.preventDefault();
	var targ = $(this).attr('data-target');
	if ($(this).hasClass('hide')) {
		$(this).parent().parent().find('.b-answer').slideUp(300);
		$(this).removeClass('hide');
	}
	else {
		$(this).parent().parent().find('.b-question').removeClass('hide');
		$(this).parent().parent().find('.b-answer').slideUp(300);
		$(targ).slideDown(300);
		$(this).addClass('hide');
	}
});





