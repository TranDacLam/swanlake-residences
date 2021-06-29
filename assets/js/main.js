$(function () {

	var heightHeader = 56

	var swiper5 = new Swiper(".s5__slide", {
		slidesPerView: 3,
		spaceBetween: 0,
		loop: true,
		slidesPerGroup: 1,
		navigation: {
			nextEl: ".s5__arrow--next",
			prevEl: ".s5__arrow--prev",
		},
		breakpoints: {
			// when window width is >= 320px
			320: {
				slidesPerView: 1,
				spaceBetween: 0,
				navigation: false
			},
			// when window width is >= 480px
			480: {
				slidesPerView: 1,
				spaceBetween: 0,
				navigation: false
			},
			// when window width is >= 640px
			768: {
				slidesPerView: 2,
				spaceBetween: 15
			},
			992: {
				slidesPerView: 3,
				spaceBetween: 0
			}
		}
	});

	$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();

		// Show/hide menu on scroll
		//if (scrollDistance >= 850) {
		//		$('nav').fadeIn("fast");
		//} else {
		//		$('nav').fadeOut("fast");
		//}
	
		// Assign active class to nav links while scolling
		$('.section').each(function(i) {
				if (($(this).position().top - (heightHeader + 4)) <= scrollDistance) {
						$('.navbar a.active').removeClass('active');
						$('.navbar a').eq(i).addClass('active');
				}
		});
	}).scroll();

	$('a[href^="#"]').bind('click', function(e) {
		e.preventDefault(); // prevent hard jump, the default behavior
		$("body").removeClass("no-scroll");
		$('#navbar').removeClass('active')

		setTimeout(() => {
			var target = $(this).attr("href"); // Set the target as variable

			// perform animated scrolling by getting top-position of target-element and set it as scroll target
			$('html, body').stop().animate({
					scrollTop: $(target).offset().top - heightHeader
			}, 600, function() {
					// location.hash = target; //attach the hash (#jumptarget) to the pageurl
			});
		}, 500)

		return false;
	});

	$('#btn-navbar, .navbar__close').on('click', function(){
		let navbar = $('#navbar')
		if(navbar.hasClass('active')){
			$("body").removeClass("no-scroll");
		}else{
			$("body").addClass("no-scroll");
		}
		$('#navbar').toggleClass('active')
	})

	$('#loading').css({ 'opacity': '0' });
	$('#loading').css({ 'display': 'none' });
	var myLazyLoad = new LazyLoad();
	
	new WOW().init();

	scaleAndPositionImage()
	$( window ).resize(function() {
		scaleAndPositionImage()
		// if (window.matchMedia('(min-width: 768px) and (max-width: 992px)').matches){
    // 	console.log(1111)
		// }
	});
	tooltipS7()
})

function scaleAndPositionImage() {
	let elBg = $('.s7__bg')
	let widthScale = 26
	let originalWidth = 2600
	let originalHeight = 1465
	let widthScreen = $( window ).width()
	let heightScreen = $( window ).height()
	let scaleX = (widthScreen / widthScale) / 100
	let heightBg = originalHeight * scaleX
	$('.s7__img').css({height: heightBg})
	// let scaleY = (widthScreen / widthScale) * 100
	console.log(widthScreen, heightScreen)
	let left = (widthScreen - originalWidth) / 2
	let top = (heightBg - originalHeight) / 2
	elBg && elBg.css({'left': `${left}px`, 'top': `${top}px`, 'transform': `scale(${scaleX}, ${scaleX})`})
}

function tooltipS7(){
	$('.dot-num').hover(function(){
		let _this = $(this)
		let offset = _this.offset()
		let name = _this.attr('data-name')
		let elInfo = $(`.s7-info__box[data-box=${name}]`)
		let widthInfo = elInfo.outerWidth()
		let heightInfo = elInfo.outerHeight()
		let offetLeft = offset.left - (widthInfo/2) + 7
		let offetTop = offset.top - 60 - heightInfo
		console.log("elInfo", offset.right)
		elInfo.addClass('show')
		elInfo.css({left: offetLeft, top: offetTop})
	}, function() {
    $(`.s7-info__box`).removeClass('show')
  })
}