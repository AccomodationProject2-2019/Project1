<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Guild.com</title>
        <link rel = "stylesheet" type = "text/css" href = "styles/profile.css" />
        <link rel = "stylesheet" type = "text/css" href = "styles/profile-responsive.css" />
        <meta charset = "utf8"/>
      
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="The Estate Teplate">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
        <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="styles/responsive.css">
        <link rel="stylesheet" type="text/css" href="index2css- responsive.css">

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">
		    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
		    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
			<link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/main.css">
            
            <!-- <link rel="stylesheet" type="text/css" href="styles/about_styles.css"> -->
    </head>
    <body>
            <header class="header trans_300">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_container d-flex flex-row align-items-center trans_300">
            
                                    <!-- Logo -->
            
                                    <div class="logo_container">
                                        <a href="homepage.php">
                                            <div class="logo">
                                                <img src="images/logo.png" alt="Guild Logo">
                                                <span>Guild</span>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <!-- Main Navigation -->
            
                                    <nav class="main_nav">
                                        <ul class="main_nav_list">
                                            <li class="main_nav_item"><a href="homepage.php">Home</a></li>
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
                                            <a href = ""> <img src = "Images/agent_1.jpg" alt = "myAccount" /></a> <a href = ""> <p class = "main_nav_item myAccText">myAccount</p></a>
                                
                                        </span>
                                    </div>
                                    
                                    <!-- Hamburger -->
            
                                    <div class="hamburger_container menu_mm">
                                        <div class="hamburger menu_mm">
                                            <i class="fas fa-bars trans_200 menu_mm"></i>
                                        </div>
                                    </div>

                                    <div class = "search-icon"   >
                                            <div class="hamburger menu_mm">
                                                    <i onclick="search(1)" on-release="search(1);" class="fas fa-search trans_200 search_mm" id = "search_toggle"></i>
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
                        </ul>
                    </div>
            
                </header>
        <!--Main-->

        <div class = "grid-container">
        
        <!--top information about seller -->
        <div class = "top-info">
        
        <div class = "grid-check1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi et, fuga beatae similique inventore rerum nesciunt explicabo pariatur, molestias hic doloribus amet facilis eveniet esse, eaque illo assumenda ab ipsum.
        </div>
        
         <div class = "grid-check2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi et, fuga beatae similique inventore rerum nesciunt explicabo pariatur, molestias hic doloribus amet facilis eveniet esse, eaque illo assumenda ab ipsum.
         </div>
        
        
        </div>

        <br /> <br /> <br /> <br /> <br />

        <div class = "middle">
            <div class = "image">
               <a href = "#" class = "avatar"><img src = "Images/agent_3.jpg" alt = "user" /></a> 
               <a href = "#"><figcaption class = "caption"><p class = "text">User one</p></figcaption></a> 

               <div class="agent_social">
							<ul class="agent_social_list">
								<li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>

            </div>
            <div class = "details">
                <!-- <div class = "header2"> -->
                    <label class = "text2 header2 one-flex">UserName : User1190</label><br />

                <!-- </div> -->
                
                <div class = "main-content">
                    <h4 class = "text3 two-flex">Contact Details</h4> 
                    <p class = "text4 three-flex">Phone : xxx xxxxx xxxx</p>
                    <p class = "text4 four-flex">Email : xxxxxxx@xxx.com</p>
                    <p class = "text4 five-flex">Fax : xxx-xxx-xx</p>
                    <p class = "text4 six-flex">Telephone : xxx-xx-xxxx</p>
                </div>
            </div>
        </div>
        <div class = "bottom">
            <div><h3 class = "text5">Features offered by user</h3></div>
                <!-- Start property Area -->
			<section class="property-area section-gap relative" id="property">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>User 's Top Rated Properties</h1>
							<p>
								Find the best deal.
							</p>
						</div>
					</div>
					<div class="row">
                         <!--item-->
						<div class="col-lg-4">
                            
							<div class="single-property">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="images/s1.jpg" alt="">
									<span>For Sale</span>
								</div>
								
							<div class="desc">
								<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>$3.5M</h4>
                                </div>
                                <span> <a>
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure> <p><a href="">Rate</a></p>

									
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

								<div class="middle">
										
									<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								    </div>
                                    
                                </div>
                                
								<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
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
                     <!--item-->
						<div class="col-lg-4">
                        
							<div class="single-property">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="images/s2.jpg" alt="">
									<span>For Sale</span>
								</div>
								
								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>$3.5M</h4>
                                    </div>
                                    <span> 
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure> <p><a href="">Rate</a></p>
				
									</span>
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
									<div class="middle">
										<div class="d-flex justify-content-start">
										<div class="room_tags">
									        <span class="room_tag"><a href="#">Hottub</a></span>
									        <span class="room_tag"><a href="#">Swimming Pool</a></span>
									        <span class="room_tag"><a href="#">Garden</a></span>
									        <span class="room_tag"><a href="#">Patio</a></span>
									        <span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								    </div>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
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
                        
                        <!--item-->
                        
                    </div>
                    <div class="col-lg-4">
                        
							<div class="single-property">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="images/s2.jpg" alt="">
									<span>For Sale</span>
								</div>
								
								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>$3.5M</h4>
                                    </div>
                                    <span> 
				    					<figure class = "stars">
                       						 <img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star.png"/> 
                        					<img src="110912-font-awesome/png/star-1.png"/> 
                   						 </figure> <p><a href="">Rate</a></p>
				
									</span>
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
									<div class="middle">
										<div class="d-flex justify-content-start">
										<div class="room_tags">
									        <span class="room_tag"><a href="#">Hottub</a></span>
									        <span class="room_tag"><a href="#">Swimming Pool</a></span>
									        <span class="room_tag"><a href="#">Garden</a></span>
									        <span class="room_tag"><a href="#">Patio</a></span>
									        <span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								    </div>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
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
                	
			</section>
            <!-- End property Area -->
            	
            </div> 
     

    

	<div class="testimonials">
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>Reviews</h3>
						<span class="section_subtitle">Comments from Clients</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque libero. Vivamus vel interdum massa. Mauris ut felis vel diam pretium eleifend vel eu neque. Mauris a condimentum tortor. Cras nec molestie est. Nulla vel facilisis metus. Quisque tempus fermentum enim, in feugiat sem laoreet</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/person.jpg" alt="https://unsplash.com/@remdesigns">
										</div>
										<div class="testimonial_name">natalie smith</div>
										<div class="testimonial_title">Client in California</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque libero. Vivamus vel interdum massa. Mauris ut felis vel diam pretium eleifend vel eu neque. Mauris a condimentum tortor. Cras nec molestie est. Nulla vel facilisis metus. Quisque tempus fermentum enim, in feugiat sem laoreet</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/person.jpg" alt="https://unsplash.com/@remdesigns">
										</div>
										<div class="testimonial_name">natalie smith</div>
										<div class="testimonial_title">Client in California</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque libero. Vivamus vel interdum massa. Mauris ut felis vel diam pretium eleifend vel eu neque. Mauris a condimentum tortor. Cras nec molestie est. Nulla vel facilisis metus. Quisque tempus fermentum enim, in feugiat sem laoreet</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/person.jpg" alt="https://unsplash.com/@remdesigns">
										</div>
										<div class="testimonial_name">natalie smith</div>
										<div class="testimonial_title">Client in California</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
    </div> 
    <br />
    
    <!--Contact Seller-->

    <!-- Call to Action -->

	<div class="cta_1">
		<div class="cta_1_background" style="background-image:url(images/cta_1.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="cta_1_content d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<h3 class="cta_1_text text-lg-left text-center">Talk to the Seller</h3>
						<div class="cta_1_phone">Call or Whatsapp now: +00263 77 456 7844</div>
					</div>
					
				</div>
			</div>
		</div>
    </div>
    
    <!--Send message-->
    
    


         <br />   
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