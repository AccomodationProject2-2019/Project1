<!DOCTYPE html>
<html lang= "en" >
<head>
    <title> guild.com </title>
    
    <meta name = "viewport" content = "width=device=width, initial-scale = 1.0" />
    <meta charset = "utf-8" />
    
    <link rel = "stylesheet" type = "text/css" href = "styles/containers.css" media = "screen" />
    <link rel = "stylesheet" type = "text/css" href = "styles/styles2.css" media = "screen" />
    
</head>

<body>
<div id = "color-top">
 		<header id = "global_header">
        <a href = "#">
    	<div class = "left_content logo"> 
         <img src = "Images/logo/guild_logo.png" alt = "Guild Logo" /> 
        </div>
        </a>
            
        <div class = "right_content">
        			
                    	<div id = "adverts_home" class="farLeft">
                      		<a href = "#"> <img src = "Images/image1.gif" /> </a>
                        </div>
                  
  						<div class =  "farLeft">
                    		<div class = "SingUp_LogIn">
                            
                           	<button class = "SingUp_LogIn_btn"> <label>LOG IN</label> </button>
                            <button  class = "SingUp_LogIn_btn"> <label>SIGN UP</label> </button>
                   
                                
                            </div>
                            
                          <div class = "search">
                            <form method = "post">
                            <input type = "all" class = "search_bar" name =  "_user-search" />
                            <button class = "search_button" > <label> SEARCH </label> </button>
                            <label class = "label_1"> FILTER:</label> <select class = "search_filter">  
                            	
                                <option id = "#"> Renting </option>
                                <option id = "#"> Booking </option>
                                <option id = "#"> Buy Properties </option>
                                <option id = "#"> Student Accomodation </option>
                                <option id = "#"> Location </option>
                                <option id = "#"> Price </option>
                                <option id = "#"> --none </option>
                            
                            </select>
                            </form>
                          </div>
  						</div>
                        
          <div class= "farLeft links">
          <figure class = "socialmedia_links">
          <a href = "#"> <img src="Images/socialMedia/Facebook.png"/> </a>
          <a href = "#" ><img src="Images/socialMedia/Twitter.png"/> </a>
          <a href = "#" ><img src="Images/socialMedia/Instagram.png"/> </a>
          </figure>
          </div>
          <!-- <div class = "farLeft cart_count">
            <figure id = "cart_counter">
                <a href = "#"> <img src = "Images/cart2.png"/>  </a>
                <figcaption id = "cart_counter2">cart(0)</figcaption>
            </figure>
          </div> -->
        </div>
        
 
    </header>
    
    <hr/>
    
    <nav id = "global_nav">
    <ul id = "nav_list">
   
        <li class = "services"> <a href = "#"> <label class = "list_">NEW DEALS </label> </a></li>
   
        <li class = "services">  <a href = "#"> <label class = "list_">PROPERTIES</label> </a></li>
   
        <li class = "services">  <a href = "#"> <label class = "list_"> RENTING </label> </a>
   		    <ul class = "hidden-list">
                <li class = "services2"> Residential </li>
                <li class = "services2"> Office Space </li>
                <li class = "services2"> Warehouses </li>
                <li class = "services2"> Event Venues </li>
                <li class = "services2"> More </li>
            </ul>
        </li>
   
        <li class = "services">  <a href = "#"> <label class = "list_"> BOOKINGS </label> </a> 
            <ul class = "hidden-list">
                <li class = "services2"> Hotels </li>
                <li class = "services2"> Lodges</li>
                <li class = "services2"> Motels</li>
                <li class = "services2"> Resorts</li>
                <li class = "services2"> More </li>

            </ul>
   
        </li>
   
        <li class = "services">  <a href = "#"> <label class = "list_"> WISHLIST</label> </a> </li>
   
        <li class = "services">  <a href = "#"> <label class = "list_"> MY ACCOUNT </label> </a></li>
        
    </ul>
    
    </nav>
    
</div>
    
    
    <main id = "main_content">
   	
    <section id = "newDeals">
    <div class = "products-header-wrapper">
        <a href = "#"><label class = "product-header">|New Deals|</label> </a>
    </div >
    <div class = "wrapper">
        
        <div class = "box-item1">
        <a href = "#"> <img src = "110912-font-awesome/png/left-arrow.png" alt="left-nav-arrow" class ="product-nav-left product-nav"/> </a>
        <!-- <a href = "#"> <img src = "110912-font-awesome/png/angle-pointing-to-left.png" alt ="left-nav-arrow"/> </a>--> 
        </div>
        
        <div class = "box-item2">
            
            <div class = "item-details">
                <span class = "item-details-left">

                    
                    <p class = "item-details-price-location">
                        Price: $120 per month 
                        <br />
                        Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                        <br />
                        Seller : <a href = ""> <em>UserName</em></a> 
                    
                    </p>
                    
                </span>
                <span class = "item-details-right">
                        <p class = "item-details-price-location">
                            Ratings:
                            <br />
                            4/5
                            <br />
                            <a href =""> <em>Rate</em></a>
                            <br />
                        </p>
                            <figure class = "stars">
                                    <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                    <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                            </figure>
                    
                   
                </span>
            </div>
            
            <div class = "item-image">
                <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
            </div>

            <div class = "item-buy-wish">
                <button class = "item-buy-wish-left wishBuyBtn" >
                    <label>
                     ADD TO WISHLIST
                    </label>
                </button>
                <button class = "item-buy-wish-right wishBuyBtn" >
                    <label>
                       MORE INFO
                    </label>
                </button>
            </div>
        </div>
        
        <div class = "box-item3">
                <div class = "item-details">
                        <span class = "item-details-left">
        
                            
                            <p class = "item-details-price-location">
                                Price: $12 000 
                                <br />
                                Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                <br />
                                Seller : <a href = ""> <em>UserName</em></a> 
                            
                            </p>
                            
                        </span>
                        <span class = "item-details-right">
                                <p class = "item-details-price-location">
                                    Ratings:
                                    <br />
                                    4/5
                                    <br />
                                    <a href =""> <em>Rate</em></a>
                                    <br />

                                </p>

                                <figure class = "stars">
                                        <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                </figure>
                           
                        </span>
                    </div>
                    
                    <div class = "item-image">
                        <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                    </div>
        
                    <div class = "item-buy-wish">
                            <button class = "item-buy-wish-left wishBuyBtn" >
                                    <label>
                                     ADD TO WISHLIST
                                    </label>
                                </button>
                                <button class = "item-buy-wish-right wishBuyBtn" >
                                    <label>
                                       BUY
                                    </label>
                                </button>
                    </div>
        </div>
        
        <div class = "box-item4">

                <div class = "item-details">
                        <span class = "item-details-left">
        
                            
                            <p class = "item-details-price-location">
                                Price: $12 per head/day 
                                <br />
                                Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                <br />
                                Seller : <a href = ""> <em>UserName</em></a> 
                            
                            </p>
                            
                        </span>
                        <span class = "item-details-right">
                                <p class = "item-details-price-location">
                                    Ratings:
                                    <br />
                                    4/5
                                    <br />
                                    <a href =""> <em>Rate</em></a>
                                    <br />
                                </p>

                                <figure class = "stars">
                                        <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                </figure>
                           
                        </span>
                    </div>
                    
                    <div class = "item-image">
                        <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                    </div>
        
                    <div class = "item-buy-wish">
                            <button class = "item-buy-wish-left wishBuyBtn" >
                                    <label>
                                     ADD TO WISHLIST
                                    </label>
                                </button>
                                <button class = "item-buy-wish-right wishBuyBtn" >
                                    <label>
                                       BOOK
                                    </label>
                                </button>
                    </div>
        </div>
        
        <div class = "box-item5">
                <div class = "item-details">
                        <span class = "item-details-left">
        
                            
                            <p class = "item-details-price-location">
                                Price: $120 per month
                                <br />
                                Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                <br />
                                Seller : <a href = ""> <em>UserName</em></a> 
                            
                            </p>
                            
                        </span>
                        <span class = "item-details-right">
                                <p class = "item-details-price-location">
                                    Ratings:
                                    <br />
                                    4/5
                                    <br />
                                    <a href =""> <em>Rate</em></a>
                                    <br />
                                </p>

                                <figure class = "stars">
                                        <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                        <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                </figure>
                           
                        </span>
                    </div>
                    
                    <div class = "item-image">
                        <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                    </div>
        
                    <div class = "item-buy-wish">
                            <button class = "item-buy-wish-left wishBuyBtn" >
                                    <label>
                                     ADD TO WISHLIST
                                    </label>
                                </button>
                                <button class = "item-buy-wish-right wishBuyBtn" >
                                    <label>
                                       MORE INFO
                                    </label>
                                </button>
                    </div>
        </div>
        
        <div class = "box-item6">
            <a href = "#"> <img src = "110912-font-awesome/png/arrowhead-pointing-to-the-right.png" alt ="right-nav-arrow" class ="product-nav-right product-nav" /> </a>
            <!-- <a href = "#"> <img src = "110912-font-awesome/png/angle-arrow-pointing-to-right.png" alt ="right-nav-arrow"/> </a>-->
        </div>
    </div>
    </section>
    
    <section id = "properties">
            <div class = "products-header-wrapper">
                    <a href = "#"><label class = "product-header">|PROPERTIES|</label> </a>
                </div >
                <div class = "wrapper">
                    
                    <div class = "box-item1">
                    <a href = "#"> <img src = "110912-font-awesome/png/left-arrow.png" alt="left-nav-arrow" class ="product-nav-left product-nav"/> </a>
                    <!-- <a href = "#"> <img src = "110912-font-awesome/png/angle-pointing-to-left.png" alt ="left-nav-arrow"/> </a>--> 
                    </div>
                    
                    <div class = "box-item2">
                        
                        <div class = "item-details">
                            <span class = "item-details-left">
            
                                
                                <p class = "item-details-price-location">
                                    Price: $12 000 
                                    <br />
                                    Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                    <br />
                                    Seller : <a href = ""> <em>UserName</em></a> 
                                
                                </p>
                                
                            </span>
                            <span class = "item-details-right">
                                    <p class = "item-details-price-location">
                                        Ratings:
                                        <br />
                                        4/5
                                        <br />
                                        <a href =""> <em>Rate</em></a>
                                        <br />
                                    </p>
                                        <figure class = "stars">
                                                <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                        </figure>
                                
                               
                            </span>
                        </div>
                        
                        <div class = "item-image">
                            <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                        </div>
            
                        <div class = "item-buy-wish">
                            <button class = "item-buy-wish-left wishBuyBtn" >
                                <label>
                                 ADD TO WISHLIST
                                </label>
                            </button>
                            <button class = "item-buy-wish-right wishBuyBtn" >
                                <label>
                                   BUY
                                </label>
                            </button>
                        </div>
                    </div>
                    
                    <div class = "box-item3">
                            <div class = "item-details">
                                    <span class = "item-details-left">
                    
                                        
                                        <p class = "item-details-price-location">
                                            Price: $12 000 
                                            <br />
                                            Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                            <br />
                                            Seller : <a href = ""> <em>UserName</em></a> 
                                        
                                        </p>
                                        
                                    </span>
                                    <span class = "item-details-right">
                                            <p class = "item-details-price-location">
                                                Ratings:
                                                <br />
                                                4/5
                                                <br />
                                                <a href =""> <em>Rate</em></a>
                                                <br />
            
                                            </p>
            
                                            <figure class = "stars">
                                                    <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                            </figure>
                                       
                                    </span>
                                </div>
                                
                                <div class = "item-image">
                                    <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                                </div>
                    
                                <div class = "item-buy-wish">
                                        <button class = "item-buy-wish-left wishBuyBtn" >
                                                <label>
                                                 ADD TO WISHLIST
                                                </label>
                                            </button>
                                            <button class = "item-buy-wish-right wishBuyBtn" >
                                                <label>
                                                   BUY
                                                </label>
                                            </button>
                                </div>
                    </div>
                    
                    <div class = "box-item4">
            
                            <div class = "item-details">
                                    <span class = "item-details-left">
                    
                                        
                                        <p class = "item-details-price-location">
                                            Price: $12 000 
                                            <br />
                                            Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                            <br />
                                            Seller : <a href = ""> <em>UserName</em></a> 
                                        
                                        </p>
                                        
                                    </span>
                                    <span class = "item-details-right">
                                            <p class = "item-details-price-location">
                                                Ratings:
                                                <br />
                                                4/5
                                                <br />
                                                <a href =""> <em>Rate</em></a>
                                                <br />
                                            </p>
            
                                            <figure class = "stars">
                                                    <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                            </figure>
                                       
                                    </span>
                                </div>
                                
                                <div class = "item-image">
                                    <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                                </div>
                    
                                <div class = "item-buy-wish">
                                        <button class = "item-buy-wish-left wishBuyBtn" >
                                                <label>
                                                 ADD TO WISHLIST
                                                </label>
                                            </button>
                                            <button class = "item-buy-wish-right wishBuyBtn" >
                                                <label>
                                                   BUY
                                                </label>
                                            </button>
                                </div>
                    </div>
                    
                    <div class = "box-item5">
                            <div class = "item-details">
                                    <span class = "item-details-left">
                    
                                        
                                        <p class = "item-details-price-location">
                                            Price: $12 000 
                                            <br />
                                            Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                            <br />
                                            Seller : <a href = ""> <em>UserName</em></a> 
                                        
                                        </p>
                                        
                                    </span>
                                    <span class = "item-details-right">
                                            <p class = "item-details-price-location">
                                                Ratings:
                                                <br />
                                                4/5
                                                <br />
                                                <a href =""> <em>Rate</em></a>
                                                <br />
                                            </p>
            
                                            <figure class = "stars">
                                                    <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                            </figure>
                                       
                                    </span>
                                </div>
                                
                                <div class = "item-image">
                                    <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                                </div>
                    
                                <div class = "item-buy-wish">
                                        <button class = "item-buy-wish-left wishBuyBtn" >
                                                <label>
                                                 ADD TO WISHLIST
                                                </label>
                                            </button>
                                            <button class = "item-buy-wish-right wishBuyBtn" >
                                                <label>
                                                   BUY
                                                </label>
                                            </button>
                                </div>
                    </div>
                    
                    <div class = "box-item6">
                        <a href = "#"> <img src = "110912-font-awesome/png/arrowhead-pointing-to-the-right.png" alt ="right-nav-arrow" class ="product-nav-right product-nav" /> </a>
                        <!-- <a href = "#"> <img src = "110912-font-awesome/png/angle-arrow-pointing-to-right.png" alt ="right-nav-arrow"/> </a>-->
                    </div>
                </div>
    </section>
    
    <section id = "properties-to-let">
            <div class = "products-header-wrapper">
                    <a href = "#"><label class = "product-header">|PROPETIES TO LET|</label> </a>
                </div >
                <div class = "wrapper">
                    
                    <div class = "box-item1">
                    <a href = "#"> <img src = "110912-font-awesome/png/left-arrow.png" alt="left-nav-arrow" class ="product-nav-left product-nav"/> </a>
                    <!-- <a href = "#"> <img src = "110912-font-awesome/png/angle-pointing-to-left.png" alt ="left-nav-arrow"/> </a>--> 
                    </div>
                    
                    <div class = "box-item2">
                        
                        <div class = "item-details">
                            <span class = "item-details-left">
            
                                
                                <p class = "item-details-price-location">
                                    Price: $120 per month
                                    <br />
                                    Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                    <br />
                                    Seller : <a href = ""> <em>UserName</em></a> 
                                
                                </p>
                                
                            </span>
                            <span class = "item-details-right">
                                    <p class = "item-details-price-location">
                                        Ratings:
                                        <br />
                                        4/5
                                        <br />
                                        <a href =""> <em>Rate</em></a>
                                        <br />
                                    </p>
                                        <figure class = "stars">
                                                <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                        </figure>
                                
                               
                            </span>
                        </div>
                        
                        <div class = "item-image">
                            <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                        </div>
            
                        <div class = "item-buy-wish">
                            <button class = "item-buy-wish-left wishBuyBtn" >
                                <label>
                                 ADD TO WISHLIST
                                </label>
                            </button>
                            <button class = "item-buy-wish-right wishBuyBtn" >
                                <label>
                                   RENT
                                </label>
                            </button>
                        </div>
                    </div>
                    
                    <div class = "box-item3">
                            <div class = "item-details">
                                    <span class = "item-details-left">
                    
                                        
                                        <p class = "item-details-price-location">
                                            Price: $120 per month 
                                            <br />
                                            Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                            <br />
                                            Seller : <a href = ""> <em>UserName</em></a> 
                                        
                                        </p>
                                        
                                    </span>
                                    <span class = "item-details-right">
                                            <p class = "item-details-price-location">
                                                Ratings:
                                                <br />
                                                4/5
                                                <br />
                                                <a href =""> <em>Rate</em></a>
                                                <br />
            
                                            </p>
            
                                            <figure class = "stars">
                                                    <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                            </figure>
                                       
                                    </span>
                                </div>
                                
                                <div class = "item-image">
                                    <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                                </div>
                    
                                <div class = "item-buy-wish">
                                        <button class = "item-buy-wish-left wishBuyBtn" >
                                                <label>
                                                 ADD TO WISHLIST
                                                </label>
                                            </button>
                                            <button class = "item-buy-wish-right wishBuyBtn" >
                                                <label>
                                                   RENT
                                                </label>
                                            </button>
                                </div>
                    </div>
                    
                    <div class = "box-item4">
            
                            <div class = "item-details">
                                    <span class = "item-details-left">
                    
                                        
                                        <p class = "item-details-price-location">
                                            Price: $120 per month 
                                            <br />
                                            Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                            <br />
                                            Seller : <a href = ""> <em>UserName</em></a> 
                                        
                                        </p>
                                        
                                    </span>
                                    <span class = "item-details-right">
                                            <p class = "item-details-price-location">
                                                Ratings:
                                                <br />
                                                4/5
                                                <br />
                                                <a href =""> <em>Rate</em></a>
                                                <br />
                                            </p>
            
                                            <figure class = "stars">
                                                    <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                            </figure>
                                       
                                    </span>
                                </div>
                                
                                <div class = "item-image">
                                    <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                                </div>
                    
                                <div class = "item-buy-wish">
                                        <button class = "item-buy-wish-left wishBuyBtn" >
                                                <label>
                                                 ADD TO WISHLIST
                                                </label>
                                            </button>
                                            <button class = "item-buy-wish-right wishBuyBtn" >
                                                <label>
                                                   RENT
                                                </label>
                                            </button>
                                </div>
                    </div>
                    
                    <div class = "box-item5">
                            <div class = "item-details">
                                    <span class = "item-details-left">
                    
                                        
                                        <p class = "item-details-price-location">
                                            Price: $120 per month 
                                            <br />
                                            Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                            <br />
                                            Seller : <a href = ""> <em>UserName</em></a> 
                                        
                                        </p>
                                        
                                    </span>
                                    <span class = "item-details-right">
                                            <p class = "item-details-price-location">
                                                Ratings:
                                                <br />
                                                4/5
                                                <br />
                                                <a href =""> <em>Rate</em></a>
                                                <br />
                                            </p>
            
                                            <figure class = "stars">
                                                    <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                            </figure>
                                       
                                    </span>
                                </div>
                                
                                <div class = "item-image">
                                    <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                                </div>
                    
                                <div class = "item-buy-wish">
                                        <button class = "item-buy-wish-left wishBuyBtn" >
                                                <label>
                                                 ADD TO WISHLIST
                                                </label>
                                            </button>
                                            <button class = "item-buy-wish-right wishBuyBtn" >
                                                <label>
                                                   RENT
                                                </label>
                                            </button>
                                </div>
                    </div>
                    
                    <div class = "box-item6">
                        <a href = "#"> <img src = "110912-font-awesome/png/arrowhead-pointing-to-the-right.png" alt ="right-nav-arrow" class ="product-nav-right product-nav" /> </a>
                        <!-- <a href = "#"> <img src = "110912-font-awesome/png/angle-arrow-pointing-to-right.png" alt ="right-nav-arrow"/> </a>-->
                    </div>
                </div>
    </section>
	
    <section id = "bookings">
            <div class = "products-header-wrapper">
                    <a href = "#"><label class = "product-header">|BOOKINGS|</label> </a>
                </div >
                <div class = "wrapper">
                    
                    <div class = "box-item1">
                    <a href = "#"> <img src = "110912-font-awesome/png/left-arrow.png" alt="left-nav-arrow" class ="product-nav-left product-nav"/> </a>
                    <!-- <a href = "#"> <img src = "110912-font-awesome/png/angle-pointing-to-left.png" alt ="left-nav-arrow"/> </a>--> 
                    </div>
                    
                    <div class = "box-item2">
                        
                        <div class = "item-details">
                            <span class = "item-details-left">
            
                                
                                <p class = "item-details-price-location">
                                    Price: $12 per head/day 
                                    <br />
                                    Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                    <br />
                                    Seller : <a href = ""> <em>UserName</em></a> 
                                
                                </p>
                                
                            </span>
                            <span class = "item-details-right">
                                    <p class = "item-details-price-location">
                                        Ratings:
                                        <br />
                                        4/5
                                        <br />
                                        <a href =""> <em>Rate</em></a>
                                        <br />
                                    </p>
                                        <figure class = "stars">
                                                <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                        </figure>
                                
                               
                            </span>
                        </div>
                        
                        <div class = "item-image">
                            <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                        </div>
            
                        <div class = "item-buy-wish">
                            <button class = "item-buy-wish-left wishBuyBtn" >
                                <label>
                                 ADD TO WISHLIST
                                </label>
                            </button>
                            <button class = "item-buy-wish-right wishBuyBtn" >
                                <label>
                                    BOOK
                                </label>
                            </button>
                        </div>
                    </div>
                    
                    <div class = "box-item3">
                            <div class = "item-details">
                                    <span class = "item-details-left">
                    
                                        
                                        <p class = "item-details-price-location">
                                            Price: $12 per head/day 
                                            <br />
                                            Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                            <br />
                                            Seller : <a href = ""> <em>UserName</em></a> 
                                        
                                        </p>
                                        
                                    </span>
                                    <span class = "item-details-right">
                                            <p class = "item-details-price-location">
                                                Ratings:
                                                <br />
                                                4/5
                                                <br />
                                                <a href =""> <em>Rate</em></a>
                                                <br />
            
                                            </p>
            
                                            <figure class = "stars">
                                                    <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                            </figure>
                                       
                                    </span>
                                </div>
                                
                                <div class = "item-image">
                                    <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                                </div>
                    
                                <div class = "item-buy-wish">
                                        <button class = "item-buy-wish-left wishBuyBtn" >
                                                <label>
                                                 ADD TO WISHLIST
                                                </label>
                                            </button>
                                            <button class = "item-buy-wish-right wishBuyBtn" >
                                                <label>
                                                   BOOK
                                                </label>
                                            </button>
                                </div>
                    </div>
                    
                    <div class = "box-item4">
            
                            <div class = "item-details">
                                    <span class = "item-details-left">
                    
                                        
                                        <p class = "item-details-price-location">
                                            Price: $12 per head/day 
                                            <br />
                                            Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                            <br />
                                            Seller : <a href = ""> <em>UserName</em></a> 
                                        
                                        </p>
                                        
                                    </span>
                                    <span class = "item-details-right">
                                            <p class = "item-details-price-location">
                                                Ratings:
                                                <br />
                                                4/5
                                                <br />
                                                <a href =""> <em>Rate</em></a>
                                                <br />
                                            </p>
            
                                            <figure class = "stars">
                                                    <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                            </figure>
                                       
                                    </span>
                                </div>
                                
                                <div class = "item-image">
                                    <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                                </div>
                    
                                <div class = "item-buy-wish">
                                        <button class = "item-buy-wish-left wishBuyBtn" >
                                                <label>
                                                 ADD TO WISHLIST
                                                </label>
                                            </button>
                                            <button class = "item-buy-wish-right wishBuyBtn" >
                                                <label>
                                                   BOOK
                                                </label>
                                            </button>
                                </div>
                    </div>
                    
                    <div class = "box-item5">
                            <div class = "item-details">
                                    <span class = "item-details-left">
                    
                                        
                                        <p class = "item-details-price-location">
                                            Price: $12 per head/day
                                            <br />
                                            Location: 1345 Nkulumane- 12,Bulawayo,Zimbabwe
                                            <br />
                                            Seller : <a href = ""> <em>UserName</em></a> 
                                        
                                        </p>
                                        
                                    </span>
                                    <span class = "item-details-right">
                                            <p class = "item-details-price-location">
                                                Ratings:
                                                <br />
                                                4/5
                                                <br />
                                                <a href =""> <em>Rate</em></a>
                                                <br />
                                            </p>
            
                                            <figure class = "stars">
                                                    <a href = "#"> <img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star.png"/> </a>
                                                    <a href = "#" ><img src="110912-font-awesome/png/star-1.png"/> </a>
                                            </figure>
                                       
                                    </span>
                                </div>
                                
                                <div class = "item-image">
                                    <img src = "Images\image-1.jpg" alt = "House_For Sale" class ="image" />
                                </div>
                    
                                <div class = "item-buy-wish">
                                        <button class = "item-buy-wish-left wishBuyBtn" >
                                                <label>
                                                 ADD TO WISHLIST
                                                </label>
                                            </button>
                                            <button class = "item-buy-wish-right wishBuyBtn" >
                                                <label>
                                                   BOOK
                                                </label>
                                            </button>
                                </div>
                    </div>
                    
                    <div class = "box-item6">
                        <a href = "#"> <img src = "110912-font-awesome/png/arrowhead-pointing-to-the-right.png" alt ="right-nav-arrow" class ="product-nav-right product-nav" /> </a>
                        <!-- <a href = "#"> <img src = "110912-font-awesome/png/angle-arrow-pointing-to-right.png" alt ="right-nav-arrow"/> </a>-->
                    </div>
                </div>
    </section>

   
    </main>
    <hr />
    
    <footer id = "global_footer">
    
    <section  class = "footer_wrap left">
    	<ul>
        	<li> <a href = "#"> Sell on Guild </a> </li>
            <li> <a href = "#"> Advertise on Guild </a> </li>
            <li> <a href = "#"> Bookings </a> </li>
            <li>  <a href = "#"> Rent out a place  </a> </li>
        </ul>
    </section>
    
    <section class = "footer_wrap center">
    	<ul>
        	<li> <a href = "#"> Services </a> </li>
            <li> <a href = "#"> Partners</a> </li>
            <li> <a href = "#"> Agents</a> </li>
            <li> <a href = "#"> Support</a></li>
    	</ul>
    </section>
    
    <section class = "footer_wrap right"> 
   	  <ul>
    	  <li> <a href = "#"> About Us </a> </li>
    	  <li> <a href = "#"> Contacts </a> </li>
    	  <li> <a href = "#"> Address </a></li>
    	  <li> <a href = "#"> Community </a></li>
          <li> <a href = "#"> Policy </a></li>
  	  </ul>
    </section>

   

    </footer>
</body>
</html>
