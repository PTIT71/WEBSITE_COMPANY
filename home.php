<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/common.css">

</head>
<body>

<div class="super_container">
	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar blue_customize_background">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<!--<li><div class="question"></div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div></div>
									</li>-->
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>profestechsolution@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="#">Register or Login</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text"><span><img style="height:70px;" src="images/img/pts.png"></span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="/home">Trang Chủ</a></li>
									<li><a href="/production">Sản Phẩm</a></li>
									<li><a href="/introduction">Giới thiệu</a></li>
									<li><a href="/vision">Tầm nhìn</a></li>
									<li><a href="/contact">Liên hệ</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								<div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="/home">Trang chủ</a></li>
				<li class="menu_mm"><a href="/production">Sản phẩm</a></li>
				<li class="menu_mm"><a href="/introduction">Giới thiệu</a></li>
				<li class="menu_mm"><a href="/vision">Tầm hình</a></li>
				<li class="menu_mm"><a href="/contact">Liên hệ</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/img/silder_ams.png)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">HỆ THỐNG QUẢN LÝ TÀI SẢN DOANH NGHIỆP</div>
									<div class="home_slider_subtitle"></div>
									<div class="home_slider_form_container">
										<form action="/asset-management-system" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<!--<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>-->
											<button type="submit" style="margin: auto;" class="home_search_button">Xem chi tiết</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/img/slider_pmt.png)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">Hệ thống theo dỏi đơn hàng</div>
									<div class="home_slider_form_container">
										<form action="/production-management-tracking" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<button type="submit" style="margin: auto;" class="home_search_button">Xem chi tiết</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/img/silder_pmt_feature.png)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title"></div>
									<div class="home_slider_form_container">
										<form action="/production-management-tracking" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<button type="submit" style="margin: auto;" class="home_search_button">Xem chi tiết</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Professional Technology Solutions Introduction</h2>
					</div>
					<div>
						<div class="section_subtitle" ><p class="paragraph_customize_18"><span class="blue_customize_color">PTS - Professional Technology Solutions </span> là nhóm phát triển phần mềm, chuyên cung cấp và tư vấn các giải pháp phần mềm hổ trợ doanh nghiệp, nhà máy, xí nghiệp tối ưu hóa quá trình sản xuất, kinh doanh. Ứng dụng công nghệ thông tin để tối ưu hóa hoạt động sản xuất kinh doanh của khách hàng là nhiệm vụ của chúng tôi. Nhóm phát triển dưới sự bảo trợ của Indruino Techonology Solutions Co., Ltd.</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
						<h3 class="feature_title">Software & Hardware</h3>
						<div class="feature_text"><p>PTS thực hiện giải pháp liên quan đến phần cứng và phần mềm</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
						<h3 class="feature_title">Mobile App</h3>
						<div class="feature_text"><p>Sử dụng tính tiện dụng của điện thoại thông minh trong cuộc sống</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
						<h3 class="feature_title">Website</h3>
						<div class="feature_text"><p>Thực thi các website quản bá hình ảnh, thương mại điện tử</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Solution</h3>
						<div class="feature_text"><p>Hổ trợ doanh nghiệp giải pháp tối ưu quá trình quản lý, SX - KD</p></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col background-title-frame">
					<div class="section_title_container text-center" >
						<h2 class="section_title" style="padding: 5px; color: white">GIỚI THIỆU SẢN PHẨM</h2>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
				<!-- Course -->
				<div class="col-lg-12 course_col course_col_customize">
					<div class="course">
						<div class="row" style="padding: 10px;">
						<div class="course_image col-lg-5"><img src="images/img/ams.png" alt=""></div>
						
						<div class="course_body  col-lg-7">
							<h3 class="course_title"><a href="/asset-management-system" style="font-size: 30px">AMS - Asset Management System</a></h3>
							<div class="course_teacher"></div>
							<div class="course_text">
								<p  class="paragraph_customize_18">AMS - Asset Management System là hệ thống phần mềm hổ trợ quản lý tài sản hiệu quả cho doanh nghiệp. Có thể sử dụng bằng nhiều nền tảng khác nhau như mobile, máy tính, tablets. Hổ trợ hiệu quả trong việc quản lý và kiểm kê tài sản bằng UHF-RFID, Barcode, mã QR. Phần mềm hổ trợ quản lý tài sản ở nhiều cấp bậc khác nhau, công ty mẹ-con.</p>
							</div>
						</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start" >
								<div class="col">
									<div class="courses_button" style="margin-top:0px; float:right"><a href="/asset-management-system">Xem chi tiết</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 course_col course_col_customize">
					<div class="course">
						<div class="row" style="padding: 10px;">
						<div class="course_image col-lg-5"><img src="images/img/pmt.png" alt=""></div>
						
						<div class="course_body  col-lg-7">
							<h3 class="course_title"><a href="/production-management-tracking" style="font-size: 30px">PMT - Production Management Tracking</a></h3>
							<div class="course_teacher"></div>
							<div class="course_text">
								<p  class="paragraph_customize_18">PMT - Production Management Tracking .Theo dõi quản lý sản xuất là sản phẩm phần mềm phù hợp với các doanh nghiệp kinh doanh quản lý đơn hàng. Hệ thống hỗ trợ giải pháp quản lý tiến độ đơn hàng, cập nhật thời gian thực, thiết lập báo cáo cảnh báo. Giúp doanh nghiệp tập trung nguồn lực tốt nhất để thực hiện đơn hàng một cách hiệu quả nhằm mang đến sản phẩm tốt nhất cho khách hàng.</p>
							</div>
						</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start" >
								<div class="col">
									<div class="courses_button" style="margin-top:0px; float:right"><a href="/production-management-tracking">Xem chi tiết</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="#">view all courses</a></div>
				</div>
			</div>-->
		</div>
	</div>

	<!-- Counter -->

	
	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text"><img style="height:90px;" src="images/img/pts_white_full.png"></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p></p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Thông tin liên hệ</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: professionaltechnologysolution@gmail.com</li>
											<li>Phone:  +84 975 339 843</li>
											<li>Thành phố Hồ Chí Minh, Việt Nam</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Ghé thăm:</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="index.html">Trang chủ</a></li>
											<li><a href="about.html">Sản phẩm</a></li>
											<li><a href="contact.html">Giới thiệu</a></li>
											<li><a href="#">Tầm nhìn</a></li>
											<li><a href="courses.html">Liên hệ</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title" style="font-size: 28px; line-height: 40px; font-style: italic;">"Hổ trợ khách hàng tối ưu hóa quá trình sản xuất và kinh doanh là niềm hạnh phúc lớn đối với chúng tôi."</div>
									<div class="footer_title" style="font-size: 14px; line-height: 40px; font-style: italic;">(Kingsley - Điều hành nhóm phát triển)</div>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/common.js"></script>

</body>
</html>