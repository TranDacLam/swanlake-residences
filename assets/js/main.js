$(function () {

	var swiper = new Swiper(".s5__slide", {
		slidesPerView: 3,
		spaceBetween: 0,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});

	$('#loading').css({ 'opacity': '0' });
	$('#loading').css({ 'display': 'none' });
	var myLazyLoad = new LazyLoad();

})