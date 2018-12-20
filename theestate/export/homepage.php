<!DOCTYPE html>
<html lang="en">
<head>
<title>The Estate</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Guild Homepage Login SignUp">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>

<body>

<div class="super_container">
	
	<!-- Home -->
	<div class="home">
            <header class="header trans_300">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_container d-flex flex-row align-items-center trans_300">
            
                                    <!-- Logo -->
            
                                    <div class="logo_container">
                                        <a href="#">
                                            <div class="logo">
                                                <img src="images/logo.png" alt="Guild Logo">
                                                <span>Guild</span>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <!-- Main Navigation -->
            
                                    <nav class="main_nav">
                                        <ul class="main_nav_list">
                                            <li class="main_nav_item"><a href="#">New Deals</a></li>
                                            <li class="main_nav_item"><a href="about.html">Properties</a></li>
                                            
                                            <li class="main_nav_item"><a href="listings.html">Renting</a>
                                                <ul class = "hidden-list">
                                                    <li class = "services2"> <a>Residential</a> </li>
                                                    <li class = "services2"> <a>Office Space</a> </li>
                                                   
                                                    <li class = "services2"> <a>Event Venues</a> </li>
                                                    <li class = "services2"> <a>More</a> </li>
                                                </ul>
                                            </li>
                                            <li class="main_nav_item"><a href="news.html">Booking</a>
                                                <ul class = "hidden-list">
                                                    <li class = "services2"> <a>Hotels</a> </li>
                                                    <li class = "services2"> <a>Lodges</a></li>
                                                    <li class = "services2"><a> Motels</a></li>
                                                    <li class = "services2"> <a>Resorts</a></li>
                                                    <li class = "services2"> <a>More</a></li>
                                    
                                                </ul>
                                            </li>
                                            <li class="main_nav_item"><a href="contact.html">wishlist</a></li>
                                        </ul>
                                    </nav>
                                    
                                    <!-- Phone Home -->
            
                                    <div class="phone_home text-center">
                                        <span class = "myAcc">
                                           <a href = "rent_a_house/login.html"> <button method = "get" action = "" class="main_nav_item log-sign-btn">Log In</button> </a>  <a href = "rent_a_house/signin.html"> <button method = "get" action = "" class="main_nav_item log-sign-btn ">Sign Up</button> </a>
                                        </span>
                                    </div>
								   
									
                                    
                                    <!-- Hamburger -->
            
                                    <div class="hamburger_container menu_mm">
                                        <div class="hamburger menu_mm">
                                            <i class="fas fa-bars trans_200 menu_mm"></i>
                                        </div>
									</div>
									
									<div class = "search-icon"   >
                                            <div class="hamburger menu_mm" onclick="search_off();">
                                                    <i  class="fas fa-search trans_200 search_mm" id = "search_toggle"></i>
                                                </div>

                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Menu -->
            
                    <div class="menu menu_mm">
                        <ul class="menu_list">
						<li class="menu_item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <a href="homepage.php">Home</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <a href="#">New Deals</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <a href="about.html">Properties</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <a href="listings.html">Renting</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <a href="news.html">Booking</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <a href="contact.html">My Account</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                    <a href="contact.html">wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                        </ul>
                        
                    </div>
            
				</header>
				
  
		<!-- Home Slider -->
		<div class="home_slider_container">
			
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Home Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" style="background-image:url(images/home_slider_bcg.jpg)"></div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<h2 class = "h2-color" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">find the best deals</h2>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" style="background-image:url(images/home_slider_bcg.jpg)"></div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<h2 class = "h2-color" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">find your dream home</h2>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" style="background-image:url(images/home_slider_bcg.jpg)"></div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Explore Guild</h1>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Home Slider Nav -->
			<div class="home_slider_nav_left home_slider_nav d-flex flex-row align-items-center justify-content-end">
				<img src="images/nav_left.png" alt="">
			</div>

		</div>
		

	</div>

	<!-- Header -->


	
	<!-- Search Box -->

	<div class="search_box">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="search_box_outer">
					
						<div class="search_box_inner">
							
							<!-- Search Box Title -->
							<div class="search_box_title text-center">
								<div class="search_box_title_inner">
									<div class="search_box_title_icon d-flex flex-column align-items-center justify-content-center"><img src="images/search.png" alt=""></div>
									<span>Explore Guild</span>
									
								</div>
								
								
							</div>
							
							

							<!-- Search Arrow -->
							<div class="search_arrow_box">
								<div class="search_arrow_box_inner">
									<div class="search_arrow_circle d-flex flex-column align-items-center justify-content-center"><span>Search it here</span></div>
									<img src="images/search_arrow.png" alt="">
								</div>
							</div>
							
							<div class = "search-bar-fix">
							
								<div class = "input-group input-group-lg trans_500" >
									<input class = "form-control" type = "text" placeholder = "What are you looking for?"/>
									
									<button class = "input-group-addon trans_500">  
										<i class = "fas fa-search"> </i>
									</button>
									
									<button class = "input-group-addon trans_500">
									<i class = "fas fa-microphone"> </i>
									</button>

								</div>
							</div>

							<!-- Search Form -->
							<form class="search_form" action="#">
								<div class="search_box_container">
									<ul class="dropdown_row clearfix">
										<li class="dropdown_item dropdown_item_5">
											<div class="dropdown_item_title">Keywords</div>
											<input class = "Search-form-inputs" type = "text"/>
											
											<button type="button" class="btn btn-default btn-lg">
											<i class="fa fa-microphone"></i> 
											</button>
								
										</li>
										
										<li class="dropdown_item dropdown_item_5">
											<div class="dropdown_item_title">Property type</div>
											<select name="property_type" id="property_type" class="dropdown_item_select">
												<option>Any</option>
												<option>For Sell</option>
                                                <option>To Let</option>
                                                <option>Hotel</option>
                                                <option>Motel</option>
                                                <option>Lodge</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_5">
											<div class="dropdown_item_title">Property Status</div>
											<select name="property_status" id="property_status" class="dropdown_item_select">
												<option>Any</option>
												<option> Immediate </option>
												<option> Negotiable </option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_5">
											<div class="dropdown_item_title">Location</div>
											<input type = "text" name="property_location" id="property_location" class="Search-form-inputs"/>
										</li>
										<li class="dropdown_item dropdown_item_5">
											<div class="dropdown_item_title">Seller Rating</div>
											<select name="rating" id="rating" class="dropdown_item_select">
												<option>Any</option>
												<option> 1</option>
                                                <option> 2</option>
                                                <option> 3</option>
                                                <option> 4</option>
                                                <option> 5</option>
											</select>
										</li>
									</ul>
								</div>

								<div class="search_box_container">
									<ul class="dropdown_row clearfix">
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Bedrooms no</div>
											<input type = "number" name="bedrooms_no" id="bedrooms_no" class="Search-form-inputs Search-form-inputs-width-row2"/>
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Bathrooms no</div>
											<input type = "number" name="bathrooms_no" id="bathrooms_no" class="Search-form-inputs Search-form-inputs-width-row2"/>
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Min Price</div>
											<input type = "number" name="min_price" id="min_price" class="Search-form-inputs Search-form-inputs-width-row2"/>
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Max Price</div>
											<input type = "number" name="max_price" id="max_price" class="Search-form-inputs Search-form-inputs-width-row2"/>
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Min Sq Ft</div>
											<input type = "number" name="min_sq_ft" id="min_sq_ft" class="Search-form-inputs Search-form-inputs-width-row2"/>
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Max Sq Ft</div>
											<input type = "number"  name="max_sq_ft" id="max_sq_ft" class="Search-form-inputs Search-form-inputs-width-row2"/>
										</li>
										<li class="dropdown_item">
											<div class="search_button">
												<input value="search" type="submit" class="search_submit_button">
											</div>
										</li>
									</ul>
								</div>

								<div class="search_features_container">
									<div class="search_features_trigger">
										<a href="#">Specific features</a>
									</div>
									<ul class="search_features clearfix">
										<li class="search_features_item">
											<div>
												<input type="checkbox" id="search_features_1" class="search_features_cb">
												<label for="search_features_1">Legal</label>
											</div>	
										</li>
										<li class="search_features_item">
											<div>
												<input type="checkbox" id="search_features_2" class="search_features_cb">
												<label for="search_features_2">Secure-Deal</label>
											</div>
										</li>
										<li class="search_features_item">
											<div>
												<input type="checkbox" id="search_features_3" class="search_features_cb">
												<label for="search_features_3">Free-Wifi</label>
											</div>
										</li>
										<li class="search_features_item">
											<div>
												<input type="checkbox" id="search_features_4" class="search_features_cb">
												<label for="search_features_4">High-Security</label>
											</div>
										</li>
										<li class="search_features_item">
											<div>
												<input type="checkbox" id="search_features_5" class="search_features_cb">
												<label for="search_features_5">Parking</label>
											</div>
										</li>
										<li class="search_features_item">
											<div>
												<input type="checkbox" id="search_features_6" class="search_features_cb">
												<label for="search_features_6">Swimming-pool</label>
											</div>
										</li>
										<li class="search_features_item">
											<div>
												<input type="checkbox" id="search_features_7" class="search_features_cb">
												<label for="search_features_7">Serviced</label>
											</div>
										</li>
										<li class="search_features_item">
											<div>
												<input type="checkbox" id="search_features_8" class="search_features_cb">
												<label for="search_features_8">Close to city</label>
											</div>
										</li>
										<li class="search_features_item">
											<div>
												<input type="checkbox" id="search_features_9" class="search_features_cb">
												<label for="search_features_9">Far from city</label>
											</div>
										</li>
										<li class="search_features_item">
											<div>
												<input type="checkbox" id="search_features_10" class="search_features_cb">
												<label for="search_features_10">Title-Deeds</label>
											</div>
										</li>
									</ul>
								</div>

							</form>


							
						</div>
					</div>
						
				</div>
			</div>
		</div>		
    </div>
    
 <!-- Contact Panel -->
 
	<!-- <nav class = "Contact-Panel">
	  <a>	<li class = "btn-panel" onclick = "pop-chat();"> <h3> Talk </h3> <br /> <h3> To </h3> <br />  <h3> US </h3></li> </a>
</nav> -->
<!--Search-Bar-->
<!-- <div class = "search-bar-fix">
		<div class = "input-group input-group-lg trans_500" >
			<input class = "form-control" type = "text" placeholder = "What are you looking for?"/>
			<span class = "input-group-addon">  
				<i class = "fa fa-search"> </i>
			</span>
			<span class = "input-group-addon">
			<i class = "fas fa-microphone"> </i>
			</span>

		</div>
</div> -->

<!-- Featured Properties -->
	

							
<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>New Features </h3>
						<span class="section_subtitle">find the latest deals</span>
					</div>
				</div>
			</div>

			

			<div class="row featured_row">
				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
					<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a>  </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
							
						<div class="card featured_card trans_300">
							
							<div class="featured_panel">for sale</div>
							<img class="card-img-top" src="images/featured_1.jpg" alt="https://unsplash.com/@breather">
							
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Factory in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

								

							</div>
						</div>
						
						
						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">BUY</div>
								<div class="featured_card_price">$540,000</div>
								
							</div>
						</div>

					</div>

				</div>

				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
					<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a> </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
						<div class="card featured_card trans_300">
							<div class="featured_panel">For Sale</div>
							<img class="card-img-top" src="images/featured_2.jpg" alt="https://unsplash.com/@astute">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">House in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">BUY</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>

				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
					<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a> </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
							
						<div class="card featured_card trans_300">
							<div class="featured_panel">For Sale</div>
							<img class="card-img-top" src="images/featured_3.jpg" alt="https://unsplash.com/@marcusneto">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">House in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">BUY</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>

			</div>
			<div class = "more-item">
					        <label class = "more-text"> <a href = "#">More</a></label>
					</div>
		</div>
	</div>

	
	<!-- Featured Properties -->
	

	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>featured properties for sale </h3>
						<span class="section_subtitle">find the best deals</span>
					</div>
				</div>
			</div>

			

			<div class="row featured_row">
				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
					<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a> </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
							
						<div class="card featured_card trans_300">
							
							<div class="featured_panel">for sale</div>
							<img class="card-img-top" src="images/featured_1.jpg" alt="https://unsplash.com/@breather">
							
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Factory in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>
						
						
						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">BUY</div>
								<div class="featured_card_price">$540,000</div>
								
							</div>
						</div>

					</div>

				</div>

				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
					<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a> </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
						<div class="card featured_card trans_300">
							<div class="featured_panel">For Sale</div>
							<img class="card-img-top" src="images/featured_2.jpg" alt="https://unsplash.com/@astute">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">House in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">BUY</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>

				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
					<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a> </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
							
						<div class="card featured_card trans_300">
							<div class="featured_panel">For Sale</div>
							<img class="card-img-top" src="images/featured_3.jpg" alt="https://unsplash.com/@marcusneto">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">House in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">BUY</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>

			</div>
			<div class = "more-item">
					        <label class = "more-text"> <a href = "#">More</a></label>
					</div>
		</div>
	</div>

	<!-- Featured Properties -->

	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>featured Properties To Let</h3>
						<span class="section_subtitle">Find the best space</span>
					</div>
				</div>
			</div>

			<div class="row featured_row">
			
				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
						<div class="card featured_card trans_300">
						<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a> </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
							<div class="featured_panel">To Let</div>
							<img class="card-img-top" src="images/featured_1.jpg" alt="https://unsplash.com/@breather">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Office in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Wifi</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title"> Rent </div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>

				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
					<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a> </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
						<div class="card featured_card trans_300">
							<div class="featured_panel">To Let</div>
							<img class="card-img-top" src="images/featured_2.jpg" alt="https://unsplash.com/@astute">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Cottage in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Wifi</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">Rent</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>

				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
					<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a> </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
						<div class="card featured_card trans_300">
							<div class="featured_panel"> To Let</div>
							<img class="card-img-top" src="images/featured_3.jpg" alt="https://unsplash.com/@marcusneto">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Flat in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Wifi</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title"> Rent</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>

			</div>
			<div class = "more-item">
					        <label class = "more-text"> <a href = "#">More</a></label>
					</div>
		</div>
	</div>
	
	<!-- Featured Properties -->

	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3> Booking </h3>
						<span class="section_subtitle"> Find the best accomodation</span>
					</div>
				</div>
			</div>

			<div class="row featured_row">
				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
					<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a> </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
						<div class="card featured_card trans_300">
							<div class="featured_panel">Book Into</div>
							<img class="card-img-top" src="images/featured_1.jpg" alt="https://unsplash.com/@breather">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Hotel in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">Book</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>
				
				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
					<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a> </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
						<div class="card featured_card trans_300">
							<div class="featured_panel">Book Into</div>
							<img class="card-img-top" src="images/featured_2.jpg" alt="https://unsplash.com/@astute">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Lodge in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">Book</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>
				
				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
					<div class = "">
									<label> <a href = "profile.php"> Seller : User1234</a> </label>
				
									<span> </a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure>
				
									</span>
						</div>
						<div class="card featured_card trans_300">
							<div class="featured_panel">Book Into</div>
							<img class="card-img-top" src="images/featured_3.jpg" alt="https://unsplash.com/@marcusneto">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Motel in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">Book</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				
			</div>
			</div>
					<div class = "more-item">
					        <label class = "more-text"> <a href = "#">More</a></label>
					</div>
		</div>
	</div>




	
	<!-- Workflow -->

	<div class="workflow">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>see how we operate</h3>
						<span class="section_subtitle">What you need to do</span>
					</div>
				</div>
			</div>

			<div class="row workflow_row">
				<div class="workflow_rocket"><img src="images/rocket.png" alt=""></div>

				<!-- Workflow Item -->
				<div class="col-lg-4 workflow_col">
					<div class="workflow_item">
						<div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
							<div class="workflow_image_background">
								<div class="workflow_circle_outer trans_200"></div>
								<div class="workflow_circle_inner trans_200"></div>
								<div class="workflow_num text-center trans_200"><span>01.</span></div>
							</div>
							<div class="workflow_image">
								<img src="images/workflow_1.png" alt="">
							</div>
							
						</div>
						<div class="workflow_item_content text-center">
							<div class="workflow_title">Explore on Guild</div>
							<p class="workflow_text">Use the search bar to searc for what you need or browser using top navigation.</p>
						</div>
					</div>
				</div>

				<!-- Workflow Item -->
				<div class="col-lg-4 workflow_col">
					<div class="workflow_item">
						<div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
							<div class="workflow_image_background">
								<div class="workflow_circle_outer trans_200"></div>
								<div class="workflow_circle_inner trans_200"></div>
								<div class="workflow_num text-center trans_200"><span>02.</span></div>
							</div>
							<div class="workflow_image">
								<img src="images/workflow_2.png" alt="">
							</div>
							
						</div>
						<div class="workflow_item_content text-center">
							<div class="workflow_title">Find the best deal</div>
							<p class="workflow_text">Discover deals offered by users on Guild and choose the one that suits your interest.</p>
						</div>
					</div>
				</div>

				<!-- Workflow Item -->
				<div class="col-lg-4 workflow_col">
					<div class="workflow_item">
						<div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
							<div class="workflow_image_background">
								<div class="workflow_circle_outer trans_200"></div>
								<div class="workflow_circle_inner trans_200"></div>
								<div class="workflow_num text-center trans_200"><span>03.</span></div>
							</div>
							<div class="workflow_image">
								<img src="images/workflow_3.png" alt="">
							</div>
							
						</div>
						<div class="workflow_item_content text-center">
							<div class="workflow_title">Buy Book or Rent</div>
							<p class="workflow_text"> Click on Buy ,Book or Rent to get information about the offer you choose.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Cities -->

	<div class="cities">
		<div class="cities_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>Select Locations You are Interested In</h3>
						<!-- <span class="section_subtitle">What you need to do</span> -->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">

					<!-- Cities Slider -->
		
					<div class="cities_slider_container">
						<div class="owl-carousel owl-theme cities_slider">
							
							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_1.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>miami</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_2.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>dublin</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_3.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>vienna</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_4.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>marbella</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_5.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>new york</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_6.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>geneva</span></div>
								</a>
							</div>
							
						</div>
						
						<div class="cities_prev cities_nav d-flex flex-row align-items-center justify-content-center trans_200">
							<img src="images/nav_left.png" alt="">
						</div>

						<div class="cities_next cities_nav d-flex flex-row align-items-center justify-content-center trans_200">
							<img src="images/nav_right.png" alt="">
						</div>

					</div>

				</div>
					
			</div>

		</div>
    </div>
    
</div>

	
	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row row-equal-height">

				<div class="col-lg-6">
					<div class="newsletter_title">
						<h3>subscribe to our newsletter</h3>
						<span class="newsletter_subtitle">Get the latest offers</span>
					</div>
					<div class="newsletter_form_container">
						<form action="#">
							<div class="newsletter_form_content d-flex flex-row">
								<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Your email here" required="required" data-error="Valid email is required.">
								<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_200" value="Submit">subscribe</button>
							</div>
						</form>
					</div>
				</div>

				<div class="col-lg-6">
					<a href="#">
						<div class="weekly_offer">
							<div class="weekly_offer_content d-flex flex-row">
								<div class="weekly_offer_icon d-flex flex-column align-items-center justify-content-center">
									<img src="images/prize.svg" alt="">
								</div>
								<div class="weekly_offer_text text-center">weekly offer</div>
							</div>
							<div class="weekly_offer_image" style="background-image:url(images/weekly.jpg)"></div>
						</div>
					</a>
				</div>

			</div>
		</div>
	

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				
				<!-- Footer About -->

				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">
						<div class="logo_container">
							<a href="#">
								<div class="logo">
									<img src="images/logo.png" alt="">
									<span>Guild</span>
								</div>
							</a>
						</div>
					</div>
					<div class="footer_social">
						<ul class="footer_social_list">
							<li class="footer_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-behance"></i></a></li>
						</ul>
					</div>
					<div class="footer_about">
						<p>Lorem ipsum dolor sit amet, cons ectetur  quis ferme adipiscing elit. Suspen dis se tellus eros, placerat quis ferme ntum et, viverra sit amet lacus. Nam gravida  quis ferme semper augue.</p>
					</div>
				</div>
				
				<!-- Footer Useful Links -->

				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">useful links</div>
					<ul class="footer_useful_links">
						<li class="useful_links_item"><a href="#">Listings</a></li>
						<li class="useful_links_item"><a href="#">Favorite Cities</a></li>
						<li class="useful_links_item"><a href="#">Clients Testimonials</a></li>
						<li class="useful_links_item"><a href="#">Featured Listings</a></li>
						<li class="useful_links_item"><a href="#">Properties on Offer</a></li>
						<li class="useful_links_item"><a href="#">Services</a></li>
						<li class="useful_links_item"><a href="#">News</a></li>
						<li class="useful_links_item"><a href="#">Our Agents</a></li>
					</ul>
				</div>

				<!-- Footer Contact Form -->
				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">Report error <br />Or seek help</div>
					<div class="footer_contact_form_container">
						<form id="footer_contact_form" class="footer_contact_form" action="post">
							<input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
							<input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">send</button>
						</form>
					</div>
				</div>

				<!-- Footer Contact Info -->

				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">contact info</div>
					<ul class="contact_info_list">
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
							<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
							<div class="contact_info_text">2556-808-8613</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
							<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
							<div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
						</li>
					</ul>
				</div>

			</div>
		</div>
		<br /> 
		<hr />
        <div class = "footer-grid">
                
                <section class = "first">
                    <ul>
                        <li> <a href = "#"> <p>Sell on Guild </p> </a> </li>
                        <li> <a href = "#"> <p>Advertise on Guild </p> </a> </li>
                        <li> <a href = "#"> <p>Bookings </p></a> </li>
                        <li>  <a href = "#"> <p> Rent out a place </p> </a> </li>
                    </ul>
                </section>
                
                <section class = "second">
                    <ul>
                        <li> <a href = "#"> <p>Services</p> </a> </li>
                        <li> <a href = "#"> <p> Partners </p></a> </li>
                        <li> <a href = "#"> <p>Agents </p></a> </li>
                        <li> <a href = "#"> <p>Support </p></a></li>
                    </ul>
                </section>
                
                <section class = "third" > 
                     <ul>
                      <li> <a href = "#"> <p> About Us </p></a> </li>
                      <li> <a href = "#"> <p>Contacts</p> </a> </li>
                      <li> <a href = "#"> <p>Address</p> </a></li>
                      <li> <a href = "#"> <p>Community</p> </a></li>
                      <li> <a href = "#"> <p>Policy</p> </a></li>
                    </ul>
				</section>
			</div>
            
               
            
                
	</footer>

	<!-- Credits -->

	<div class="credits">
		<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
	</div>

</div>

<script src = "homepage.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>