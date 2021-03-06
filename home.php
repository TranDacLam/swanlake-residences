<?php get_header();
$source = implode(' - ',$_GET);
?>
<div class="loading-scren-wrapper" id="loading">
	<div class="loading-scren">
		<span>SWANLAKE</span>
		RESIDENCES
	</div>
	<ul>
		<li data="L"></li>
		<li data="O"></li>
		<li data="A"></li>
		<li data="D"></li>
		<li data="I"></li>
		<li data="N"></li>
		<li data="G"></li>
</ul>
</div>
<div class="landing-page">
	<header class="header">
		<div class="header__top"></div>
		<div class="container header__content">
			<div class="header__left">
				<div class="header__logo">
					<img src="<?php echo THEME_URL  ?>/assets/images/logo.png" />
				</div>
				<div class="header__name">
					SWANLAKE RESIDENCES
				</div>
			</div>
	
			<div class="header__right">
				<div class="header__social">
					<span>Social Media</span>
					<a href="https://www.facebook.com/ecopark.com.vn" target="_blank">
						<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/facebook.png" />
					</a>
					<a href="https://youtube.com/c/EcoparkOfficial" target="_blank">
						<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/youtube.png" />
					</a>
				</div>
				<div class="header__line"></div>
				<div class="header__contact">
					<span>Gửi Liên Hệ</span>
					<a href="#s9">
						<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/mail.png" />
					</a>
				</div>
				<div class="header__line"></div>
				<div class="header__menu">
					<span>MENU</span>
					<a id="btn-navbar">
						<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/menu.png" />
					</a>
				</div>
			</div>
		</div>
		<div class="navbar" id="navbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" href="#s1">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#s2">Giới thiệu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#s3">Đối tác</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#s4">Công nghệ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#s5">Tiện ích</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#s6">Sản phẩm</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#s7">Vị trí</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#s8">Mặt bằng tầng</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#s9">Liên hệ</a>
				</li>
			</ul>

			<button class="navbar__close">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
				</svg>
				<span>Đóng</span>
			</button>

		</div>
	</header>

	<div class="main">

		<section class="section s1" id="s1">
			<div class="s1-wrapper">
				<img class="lazy wow slideInUp" data-wow-duration="2s" data-src="<?php echo THEME_URL  ?>/assets/images/s1-title.png" />
			</div>
		</section>

		<section class="section lazy s2" id="s2" data-bg="<?php echo THEME_URL  ?>/assets/images/s2-bg.png">
			<div class="s2-wrapper">
				<div class="container">
					<div class="row s2__md">
						<div class="col-lg-5">
							<img class="lazy wow slideInUp" data-wow-duration="1.7s" data-src="<?php echo THEME_URL  ?>/assets/images/s2-title.png" />
						</div>
					</div>
					<div class="row s2__xs">
						<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s2-mb-1.jpg" />
					</div>
				</div>
			</div>
		</section>

		<section class="section lazy s3" id="s3" data-bg="<?php echo THEME_URL  ?>/assets/images/s3-bg.png">
			<div class="s3-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 s3__content wow slideInUp" data-wow-duration="1.5s">
							<div class="section-item">
								<div class="section-item__line"></div>
								<span>ĐỐI TÁC</span>
							</div>
							<h3 class="s3__title">
								Hợp tác với tập đoàn bất động sản lớn nhất tại Nhật Bản 
							</h3>
							<div>
								<p>Lần đầu tiên tại Việt Nam, Ecopark mang đến mô hình nghỉ dưỡng khoáng nóng tại gia.</p>
								<p>
								Tại chính ngôi nhà bạn, bạn có thể trải nghiệm khoáng nóng bất kì lúc nào bạn muốn,<br>
								Tại chính ngôi nhà bạn, bạn có thể tận hưởng cuộc sống nghỉ dưỡng 365 ngày cho chính bản thân & gia đình.
								</p>
							</div>
							<div class="s3__icon">
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s3-icon-1.png" />
								<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s3-icon-2.png" />
							</div>
						</div>
						<div class="col-lg-6 s3__img">
							<img class="lazy wow slideInUp" data-wow-duration="1.5s" data-src="<?php echo THEME_URL  ?>/assets/images/s3-img-1.png" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section s4" id="s4">
			<div class="s4-wrapper">
				<div class="container">
					<div class="row">
						<div class="s4__img">
							<img class="lazy wow slideInUp s4__img-md" data-wow-duration="1.5s" data-src="<?php echo THEME_URL  ?>/assets/images/s4-img-1.jpg" />
							<img class="lazy s4__img-xs" data-src="<?php echo THEME_URL  ?>/assets/images/s4-mb-1.jpg" />
						</div>

						<div class="col-lg-6">
						</div>

						<div class="col-lg-6 s4__content wow slideInUp" data-wow-duration="1.5s">
							<div class="section-item">
								<div class="section-item__line"></div>
								<span>CÔNG NGHỆ KHOÁNG NÓNG</span>
							</div>
							<h3 class="s4__title">
								Mang công nghệ ion hoá khoáng nóng đỉnh cao của Nhật Bản Về <span style="white-space: nowrap;">Việt Nam</span>
							</h3>
							<div>
								<p>
									Swanlake là dự án đầu tiên tại Việt Nam, ứng dụng công nghệ ion hoá khoáng chất Kankyo được tư vấn và thiết kế bởi Raymond - tập đoàn với hơn 100 năm kinh nghiệm thiết kế & vận hành khoáng nóng tại Nhật Bản.
								</p>
								<p>
									Với 14 hồ khoáng nóng được “may đo” riêng biệt cho từng nhu cầu trị liệu, mỗi hồ sẽ sở hữu những công thức & tỷ lệ khoáng nóng vượt trội, kết hợp hoàn hảo cùng nhiệt độ tương thích để trị liệu cho từng nhu cầu & vấn đề về sức khoẻ của cư dân.
								</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>

		<section class="section s5" id="s5">
			<div class="s5-wrapper">
				<div class="s5__content wow slideInUp" data-wow-duration="1.5s">
					<p class="s5__subtitle">
						TIỆN ÍCH
					</p>
					<h3 class="s5__title">
						Tổ hợp bất động sản trị liệu đầu tiên tại Việt Nam
					</h3>
					<p class="s5__desc">
						Toàn bộ các tiện ích chăm sóc sức khoẻ của toà tháp được phát triển như một đại trung tâm trị liệu, vận hành theo một quy trình khép kín từ tư vấn, trị liệu, chăm sóc đến tái tạo và nghỉ ngơi.
					</p>
				</div>
				<div class="s5__slide wow slideInUp" data-wow-duration="1.5s">
					<div class="swiper-wrapper">
						<div class="s5__item swiper-slide">
							<div class="s5__item-img">
								<img class="swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s5-img-1.jpg?v=2" />
							</div>
							<div class="s5__item-content">
								<p class="s5__item-title">Tổ hợp khoáng nóng Onsen 2,400m2</p>
								<p class="s5__item-desc"></p>
							</div>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="s5__item swiper-slide">
							<div class="s5__item-img">
								<img class="swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s5-img-2.jpg?v=2" />
							</div>
							<div class="s5__item-content">
								<p class="s5__item-title">14 hồ khoáng nóng & lạnh</p>
								<p class="s5__item-desc">Với công nghệ “may đo” cho từng nhu cầu trị liệu, mỗi hồ sẽ sở hữu những công thức về tỷ lệ khoáng nóng cho từng vấn đề sức khoẻ của cư dân</p>
							</div>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="s5__item swiper-slide">
							<div class="s5__item-img">
								<img class="swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s5-img-3.jpg?v=1" />
							</div>
							<div class="s5__item-content">
								<p class="s5__item-title">5 phòng xông hơi hiện đại </p>
								<p class="s5__item-desc">2 phòng xông nóng, phòng xông lạnh, phòng xông thảo mộc & phòng xông hơi đá muối Himalaya</p>
							</div>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="s5__item swiper-slide">
							<div class="s5__item-img">
								<img class="swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s5-img-4.jpg?v=1" />
							</div>
							<div class="s5__item-content">
								<p class="s5__item-title">Hồ bơi thác nước phong cách Nhật </p>
								<p class="s5__item-desc"></p>
							</div>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="s5__item swiper-slide">
							<div class="s5__item-img">
								<img class="swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s5-img-5.jpeg?v=1" />
							</div>
							<div class="s5__item-content">
								<p class="s5__item-title">Detox Spa</p>
								<p class="s5__item-desc">Chuỗi phòng detox thuỷ liệu, quang học và khí detox; Chuỗi nhà hàng & cửa hàng chuyên cung cấp các liệu trình detox; trung tâm khí liệu chuyên dạy yoga & phương pháp dưỡng sinh</p>
							</div>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="s5__item swiper-slide">
							<div class="s5__item-img">
								<img class="swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s5-img-6.png?v=1" />
							</div>
							<div class="s5__item-content">
								<p class="s5__item-title">Central Spa</p>
								<p class="s5__item-desc">Trung tâm spa với các công nghệ chăm sóc da, chăm sóc tóc, chăm sóc body với các loại máy móc hiện đại bậc nhất</p>
							</div>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="s5__item swiper-slide">
							<div class="s5__item-img">
								<img class="swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s5-img-7.png?v=1" />
							</div>
							<div class="s5__item-content">
								<p class="s5__item-title">Aqua Spa</p>
								<p class="s5__item-desc">Phòng lạnh âm, phòng nóng - lạnh đối lưu, phòng thuỷ thanh lọc</p>
							</div>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="s5__item swiper-slide">
							<div class="s5__item-img">
								<img class="swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s5-img-8.jpg?v=1" />
							</div>
							<div class="s5__item-content">
								<p class="s5__item-title">Vườn thiền ion âm & vườn đá muối hồng ngoại Himalaya đầu tiên tại Việt Nam</p>
								<p class="s5__item-desc">Với công nghệ đưa ion âm vào các vườn thiền, trung hoà lượng ion dương cơ thể tiếp thu từ năng lượng điện tử có trong điện thoại, laptop, ô nhiễm, khói bụi từ môi trường. Từ đó giúp cơ thể ức chế các vi khuẩn, tăng cường trao đổi oxy giúp cơ thể khoẻ hơn, ngủ ngon hơn.</p>
							</div>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
					</div>

					<div class="s5__arrow s5__arrow--next">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
						</svg>
					</div>
					<div class="s5__arrow s5__arrow--prev">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
						</svg>
					</div>
      		
				</div>
			</div>
		</section>


		<section class="section s6" id="s6">
			<div class="s6-wrapper container">
				<div class="s6__content wow slideInUp" data-wow-duration="1.5s">
					<h3 class="s6__title">
						Sở hữu chuỗi vườn Nhật 1,8ha lớn nhất Việt Nam
					</h3>
					<p class="s6__desc">
						Trong suốt 3 năm phát triển dự án Swanlake Resideces, đội ngũ chuyên gia cảnh quan & cây xanh Ecopark đã nghiên cứu kĩ lưỡng về cảnh quan, văn hoá & lối sống của Nhật Bản để tâm huyết thiết kế chuỗi vườn Nhật 1,8ha mang phong cách Nhật Bản lớn nhất Việt Nam.
					</p>
				</div>
				<div class="s6__list">
					<div class="row wow slideInUp swiper-wrapper" data-wow-duration="1.5s">
						<div class="col-lg-4 col-md-6 s6__item swiper-slide">
							<div class="s6__item-img">
								<img class="lazy swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s6-img-1.jpg?v=1" />
							</div>
							<p class="s6__item-title">Vườn thiền</p>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="col-lg-4 col-md-6 s6__item swiper-slide">
							<div class="s6__item-img">
								<img class="lazy swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s6-img-2.jpg?v=1" />
							</div>
							<p class="s6__item-title">Vườn trà đạo</p>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="col-lg-4 col-md-6 s6__item swiper-slide">
							<div class="s6__item-img">
								<img class="lazy swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s6-img-3.jpg?v=1" />
							</div>
							<p class="s6__item-title">Thác nước nhân tạo 9 tầng cao nhất Việt Nam</p>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="col-lg-4 col-md-6 s6__item swiper-slide">
							<div class="s6__item-img">
								<img class="lazy swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s6-img-4.jpg?v=1" />
							</div>
							<p class="s6__item-title">Đường dạo hoa Anh Đào</p>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="col-lg-4 col-md-6 s6__item swiper-slide">
							<div class="s6__item-img">
								<img class="lazy swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s6-img-5.jpg?v=1" />
							</div>
							<p class="s6__item-title">Suối thác cá Koi</p>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="col-lg-4 col-md-6 s6__item swiper-slide">
							<div class="s6__item-img">
								<img class="lazy swiper-lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s6-img-6.jpg?v=1" />
							</div>
							<p class="s6__item-title">Đường dạo hoa Tử Đằng đầu tiên của Việt Nam </p>
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
					</div>
					<div class="s6__pagination"></div>
				</div>
			</div>
		</section>

		<section class="section s7" id="s7">
			<div class="s7-wrapper">
				<div class="s7__content container">
					<div class="s7__body wow slideInUp" data-wow-duration="1.5s">
						<div class="section-item">
							<div class="section-item__line"></div>
							<span>VỊ TRÍ</span>
						</div>
						<h3 class="s7__title">
							Sở hữu vị trí đắt giá, trái tim của Ecopark
						</h3>
						<p class="s7__desc">
						Swanlake Residences nằm tại vị trí trung tâm nhất khu đô thị Ecopark, vừa là tâm điểm kết nối toàn bộ các tiện ích lân cận, vừa ôm trọn công viên Hồ Thiên Nga 50ha & sân golf 10ha mang đến một tầm view hoàn hảo & đắt giá nhất.
						</p>
					</div>
					<div class="s7__icon wow slideInUp" data-wow-duration="1.5s">
						<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s7-icon.png" />
					</div>
				</div>
				<div class="s7__img wow slideInUp" data-wow-duration="1.5s">
					<div class="s7__bg lazy" data-bg="<?php echo THEME_URL  ?>/assets/images/s7-img.jpg?v=1">
						<div class="all-dot">
							<a class="dot-num dot-01 show" href="javascript:void(0);" data-name="01" data-box="01"><span class="circle"></span><span class="circle-inner"></span></a>
							<a class="dot-num dot-02 show" href="javascript:void(0);" data-name="02" data-box="02"><span class="circle"></span><span class="circle-inner"></span></a>
							<a class="dot-num dot-03 show" href="javascript:void(0);" data-name="03" data-box="03"><span class="circle"></span><span class="circle-inner"></span></a>
							<a class="dot-num dot-04 show" href="javascript:void(0);" data-name="04" data-box="04"><span class="circle"></span><span class="circle-inner"></span></a>
							<a class="dot-num dot-05 show" href="javascript:void(0);" data-name="05" data-box="05"><span class="circle"></span><span class="circle-inner"></span></a>
							<a class="dot-num dot-06 show" href="javascript:void(0);" data-name="06" data-box="06"><span class="circle"></span><span class="circle-inner"></span></a>
							<a class="dot-num dot-07 show" href="javascript:void(0);" data-name="07" data-box="07"><span class="circle"></span><span class="circle-inner"></span></a>
							<a class="dot-num dot-08 show" href="javascript:void(0);" data-name="08" data-box="08"><span class="circle"></span><span class="circle-inner"></span></a>
							<a class="dot-num dot-09 show" href="javascript:void(0);" data-name="09" data-box="09"><span class="circle"></span><span class="circle-inner"></span></a>
							<a class="dot-num dot-10 show" href="javascript:void(0);" data-name="10" data-box="10"><span class="circle"></span><span class="circle-inner"></span></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="s7-info">
			<div class="s7-info__box no-pic" data-box="01">
				<div class="s7-info__box-text">
					<p>Phố shopping, giải trí 7,5km</p>
				</div>
			</div>
			<div class="s7-info__box no-pic" data-box="02">
				<div class="s7-info__box-text">
					<p>Trường PTLC Quốc Tế Chadwick</p>
				</div>
			</div>
			<div class="s7-info__box no-pic" data-box="03">
				<div class="s7-info__box-text">
					<p>Hồ thiên nga 50ha</p>
				</div>
			</div>
			<div class="s7-info__box no-pic" data-box="04">
				<div class="s7-info__box-text">
					<p>Trường Đại học y khoa Tokyo</p>
				</div>
			</div>
			<div class="s7-info__box no-pic" data-box="05">
				<div class="s7-info__box-text">
					<p>Trường Đại học BUV</p>
				</div>
			</div>
			<div class="s7-info__box no-pic" data-box="06">
				<div class="s7-info__box-text">
					<p>Bệnh viện Đại học Y Khoa Tokyo</p>
				</div>
			</div>
			<div class="s7-info__box no-pic" data-box="07">
				<div class="s7-info__box-text">
					<p>Hơn 100+ nhà hàng & coffee giữa thiên nhiên</p>
				</div>
			</div>
			<div class="s7-info__box no-pic" data-box="08">
				<div class="s7-info__box-text">
					<p>Sân golf 9 hố</p>
				</div>
			</div>
			<div class="s7-info__box no-pic" data-box="09">
				<div class="s7-info__box-text">
					<p>Trung tâm mua sắm trên mặt nước</p>
				</div>
			</div>
			<div class="s7-info__box no-pic" data-box="10">
				<div class="s7-info__box-text">
					<p>Trường liên cấp Edison & 20+ trường mẫu giáo</p>
				</div>
			</div>
		</div>

		<section class="section s8 lazy" id="s8" data-bg="<?php echo THEME_URL  ?>/assets/images/s8-bg.png">
			<div class="s8-wrapper container">
				<div class="row">
					<div class="col-lg-4 s8__content wow slideInUp" data-wow-duration="1.5s">
							<p class="s8__content-subtle">Layout tầng điển hình</p>
							<h3 class="s8__content-title">Swanlake residences</h3>
							<p class="s8__content-desc">Tầng 08A - 18, 22 - 37</p>
							<!-- <img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s8-img-1.png" />
							<p class="s8__content-note">* Mọi thông tin trên layout đúng tại thời điểm phát hành, thông số đúng được quy định tại văn bản Chủ đầu tư ký kết với Khách hàng Swanlake residence R1  18/06/2021</p> -->
					</div>
					<div class="col-lg-6 s8__img wow slideInUp" data-wow-duration="1.5s">
						<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s8-img-2.png" />
					</div>
					<div class="col-lg-2 s8__icon wow slideInUp"data-wow-duration="1.5s">
						<img class="lazy" data-src="<?php echo THEME_URL  ?>/assets/images/s8-img-3.png" />
					</div>
				</div>
			</div>
		</section>

		<div class="section contact" id="s9">
			<div class="contact__content">
				<img class="lazy wow slideInUp" data-wow-duration="1.5s" data-src="<?php echo THEME_URL  ?>/assets/images/logo.png" />
				<h3 class="wow slideInUp" data-wow-duration="1.5s">nhận thông tin dự án</h3>
			</div>
			<form class="contact__form wow slideInUp" data-wow-delay=".4s" data-wow-duration="2s">
					<div class="row">
						<div class="">
							<label>Họ và Tên</label>
							<input type="text" class="form-control" name="c_name">
						</div>
						<div class="">
							<label>Điện thoại</label>
							<input type="text" class="form-control" name="c_phone">
						</div>
					</div>
					<div class="row">
						<div class="">
							<label>Email</label>
							<input type="text" class="form-control" name="c_email">
						</div>
						<div class="">
							<label>Địa chỉ</label>
							<input type="text" class="form-control" name="c_address">
						</div>
					</div>
					<div class="text-center">
						<input type="hidden" name="action" value="ajaxRegister">
						<input type="hidden" name="c_source" value="<?php echo $source ?>">
						<button type="submit" class="btn btn-light">
						Gửi Thông Tin
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
							</svg>
						</button>
					</div>
				</form>
		</div>

	</div>

	<footer>
			<p>
				2021 <strong>SWANLAKE</strong> - ECOPARK
			</p>
	</footer>
</div>
<?php get_footer() ?>