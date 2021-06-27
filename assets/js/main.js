$(function () {


  // Init WOW.js and get instance
  var wow = null;


	/* Start slide */
	let navText = [
		`<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
		</svg>`,
		`<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
		</svg>`
	];

	$('.s-premium-6__list').owlCarousel({
		items: 1,
		loop: true,
		margin: 4,
		stagePadding: 200,
		nav: true,
		navText: navText,
		// autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				stagePadding: 0,
				margin: 0,
				nav: false,
			},
			568: {
				stagePadding: 0,
				margin: 0,
				nav: true,
			},
			// breakpoint from 992 up
			992: {
				stagePadding: 200,
			},
			1200: {
				stagePadding: 250,
			},
			1440: {
				stagePadding: 200,
			}
		}
	});

	$('.products__list').owlCarousel({
		items: 3,
		loop: true,
		margin: 20,
		nav: true,
		navText: navText,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				margin: 20,
				nav: false,
				items: 1,
			},
			568: {
				margin: 20,
				nav: true,
				items: 1,
			},
			768: {
				margin: 20,
				nav: true,
				items: 2,
			},
			// breakpoint from 992 up
			992: {
				margin: 20,
			},
			1200: {
				margin: 20,
			},
			1440: {
				margin: 20,
			}
		}
	});


	$('.scroll-to-top').on('click', function () {
		$('html, body').animate({ scrollTop: 0 }, '300');
	})

	//   OpacityScroll.init('s-premium');
	function scrollFullPage() {
		var isScroll = false
		var allEle = $(`.s-premium .section`)
		var index = 0
		var maxIndex = allEle.length
		var duration = 700
		function opacityScroll() {
			[].forEach.call(allEle, (child, idx) => {
				if (idx == index) {
					$(child).css({ 'z-index': 3 })
				}
			})
		}
		function onTranslate(type, el, elTemp) {

			if ($(window).width() > 1200) {
				// wow js
				wow = new WOW({boxClass:     'wow-'+index }).init();
			}

			let distanceA = 100
			let distanceZ = 0
			if(index == 0){
				$('.navbar').css({display: 'none'});
			}else{
				setTimeout(() => {
					$('.navbar').css({display: 'flex'});
				}, 700)
			}
			// if (index == 0) {
			// 	$('.s-premium').addClass('s-premium--first');
			// } else {
			// 	setTimeout(() => {
			// 		$('.s-premium').removeClass('s-premium--first');
			// 	}, duration)
			// }
			// if (index == 7) {
			// 	setTimeout(() => {
			// 		$('.s-premium').addClass('s-premium--last');
			// 	}, duration)
			// } else {
			// 	setTimeout(() => {
			// 		$('.s-premium').removeClass('s-premium--last');
			// 	}, duration)
			// }
			if (type == "up") {
				distanceA = -100
				distanceZ = 0
			}
			el.css({ 'z-index': 4 })
			elTemp.css({ 'z-index': 3 })
			$('#navbar-box-menu a, #navbar-menu a').removeClass('active')
			$("#navbar-box-menu").find(`[data-index='${index}']`).addClass('active')
			$("#navbar-menu").find(`[data-index='${index}']`).addClass('active')
			$({ distanceTranslate: distanceA }).animate({ distanceTranslate: distanceZ }, {
				step: function (go) {
					el.css('transform', 'translate(0%, ' + go + '%)');
				},
				duration,
				easing: 'linear',
				complete: function () {
					elTemp.css({ 'z-index': 1 })
					setTimeout(() => {
						isScroll = false
					}, 300)
				}
			});
		}
		opacityScroll()

		$(window).on('wheel', function (e) {
			// your logic here
			var delta = e.originalEvent.wheelDelta
			if (isScroll || (index <= 0 && delta > 0) || (index >= (maxIndex - 1) && delta < 0)) {
				return
			}
			isScroll = true
			if (delta < 0) {
				let indexTemp = index
				index += 1
				onTranslate('down', $(allEle[index]), $(allEle[indexTemp]))
			} else {
				let indexTemp = index
				index -= 1
				onTranslate('up', $(allEle[index]), $(allEle[indexTemp]))
			}
		})

		$('#navbar-box-menu, #navbar-menu, .link-arrow, .link-arrow--header, .header__hotline').on('click', 'a', function (e) {
			if (isScroll) {
				return
			}
			let indexTagA = parseInt($(this).attr('data-index'));
			if (isNaN(indexTagA)) {
				return
			}
			let indexTemp = index
			index = indexTagA
			if (index == indexTemp) return
			isScroll = true
			if (index > indexTemp) {
				onTranslate('down', $(allEle[index]), $(allEle[indexTemp]))
			} else {
				onTranslate('up', $(allEle[index]), $(allEle[indexTemp]))
			}
			$('#navbarSupportedContent').collapse('hide');
		})

		$('.header__hotline').on('click', function (e) {
			if (isScroll) {
				return
			}
			let indexTagA = parseInt($(this).attr('data-index'));
			if (isNaN(indexTagA)) {
				return
			}
			let indexTemp = index
			index = indexTagA
			if (index == indexTemp) return
			isScroll = true
			if (index > indexTemp) {
				onTranslate('down', $(allEle[index]), $(allEle[indexTemp]))
			} else {
				onTranslate('up', $(allEle[index]), $(allEle[indexTemp]))
			}
			$('#navbarSupportedContent').collapse('hide');
		})

		var clickStartY;
		$(document).on({
			// 'mousemove': function(e) {
			// //   console.log("mousemove", e)
			// //   clicked && updateScrollPos(e);
			// },
			'mousedown': function (e) {
				clickStartY = e.pageY;
			},
			'mouseup': function (e) {
				if (isScroll) return
				if (clickStartY > e.pageY) {
					if (index >= (maxIndex - 1) || (clickStartY - e.pageY) < 150) return
					isScroll = true
					let indexTemp = index
					index += 1
					onTranslate('down', $(allEle[index]), $(allEle[indexTemp]))
				} else {
					if (index <= 0 || (e.pageY - clickStartY) < 150) return
					isScroll = true
					let indexTemp = index
					index -= 1
					onTranslate('up', $(allEle[index]), $(allEle[indexTemp]))
				}
			}
		});

		// $('#navbarSupportedContent').on('show.bs.collapse', function () {
		// 	$('.s-premium').removeClass('s-premium--last');
		// })
		// $('#navbarSupportedContent').on('hidden.bs.collapse', function () {
		// 	if (index == 8) {
		// 		$('.s-premium').addClass('s-premium--last');
		// 	}
		// })
	}

	function funcForMobile() {
		let offsetTop = 63
		if ($(window).width() <= 480) {
			offsetTop = 47
		}
		$("#navbar-menu a, .link-arrow a, .link-arrow--header a, .header__hotline").on('click', function (event) {
			let indexTagA = parseInt($(this).attr('data-index'));
			if (isNaN(indexTagA)) {
				return
			}
			var _this = $(this);
			$('html, body').stop().animate({ scrollTop: $('#section' + indexTagA).offset().top - offsetTop }, 1500);
			if (!$(this).hasClass('collapsed') && $(window).width() <= 1200) {
				$('#navbarSupportedContent').collapse('hide');
			}
		});
	}

	function addFullPage() {
		if ($(window).width() > 1200) {
			scrollFullPage();
			// wow js
			wow = new WOW().init();
		} else {
			funcForMobile();
		}

		$(window).resize(function () {
			if ($(window).width() > 1200) {
				$("#navbar-menu a, .link-arrow a, .link-arrow--header a, .header__hotline").off('click');
				scrollFullPage()
			} else {
				$('.s-premium').addClass('s-premium--first');
				$(window).off('wheel');
				$('#navbar-box-menu, #navbar-menu, .link-arrow, .link-arrow--header, .header__hotline').off('click');
				$(document).off('mousedown');
				$(document).off('mouseup');
				funcForMobile()
			}
		});
	}

	// $('.s-premium-2__zoom').magnificPopup({
	// 	type: 'image',
	// 	// other options
	// 	closeOnContentClick: true,
	// 	closeBtnInside: false,
	// 	fixedContentPos: true,
	// 	mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
	// 	image: {
	// 		verticalFit: true
	// 	},
	// 	zoom: {
	// 		enabled: true,
	// 		duration: 400 // don't foget to change the duration also in CSS
	// 	}
	// });

	addFullPage();

	// $(window).on('load', function () {
	// 	// $('#loading').css({ 'opacity': '0' });
	// 	setTimeout(() => {
	// 		// $('#loading').css({ 'display': 'none' });
	// 	}, 500)
	// });


	$('#loading').css({ 'opacity': '0' });
	$('#loading').css({ 'display': 'none' });
	var myLazyLoad = new LazyLoad();

})