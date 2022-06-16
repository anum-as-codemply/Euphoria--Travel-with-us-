<?php
	session_start();
	if(isset($_SESSION['login-id'])){
		include_once('navbar2.php');
	}
	else{
		include_once('navbar.php');
	}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euphoria- Travel with Us</title>
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico">
	<!-- stylesheets -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/slider.css" type="text/css" />
	<link rel="stylesheet" href="css/packages.css" type="text/css" />
	
	<!-- jquery script -->
    <script type="text/javascript" src="scripts/jquery-2.1.4.min.js"></script>
    <!-- bootstrap starter css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- fontawesome icons kit-->
    <script src="https://kit.fontawesome.com/4138468106.js" crossorigin="anonymous"></script>
  <style>
    html {
      scroll-behavior: smooth;
    }
    
    #booking { 
    position: relative; 
    height: 50vh;
    width: 100%;
	background: url("assets/travel-bg.jpeg");
	background-size: cover;
	background-position: bottom;
}

    #book-btn{
    	background-color: #2bcac9;
    	border: none;
    	width: 250px;
    	padding: 10px;
    	border-radius: 20px;
    	font-size: 20px;
      }
    
    #book-btn:hover{
    	background-color: #2bcacabd;
    }

    
	@import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');
  </style>
  </head>

<body>

<div class="banner">
<h2 id="text">Travel with Us!</h2>

<div class="clouds">
<img src="images/cloud1.png" style="--i:1;">
<img src="images/cloud2.png" style="--i:2;">
<img src="images/cloud3.png" style="--i:3;">
<img src="images/cloud4.png" style="--i:4;">
<img src="images/cloud5.png" style="--i:5;">
<img src="images/cloud1.png" style="--i:10;">
<img src="images/cloud2.png" style="--i:9;">
<img src="images/cloud3.png" style="--i:8;">
<img src="images/cloud4.png" style="--i:7;">
<img src="images/cloud5.png" style="--i:6;">
</div>

</div>
  
 <br><br><br>
 <div id="intro" style="margin: 0 160px 0 160px;">
 <div class="container">
	<div class="row align-items-center">
		<div class="col d-flex justify-content-center">
			<h1 style="font-family: 'Mochiy Pop P One';"> Have a great experience of travelling with Euphoria</h1>
		</div>
	</div>
	<br><br>
	<div class="row align-items-center">
		<div class="col d-flex justify-content-center">
			<h3><i> "The world is a book, and those who do not travel read only one page." - <small>Saint Augustine</small></i></h3>
		</div>
	</div>
	<br><br>
	<div class="row align-items-center">
		<div class="col d-flex justify-content-center">
			<p> Our philosophy is simple. To create enriching experiences for travelers by combining an unbeatable mix of exceptional service and quality at great value. At the heart of everything we do is our passion to provide industry leading service and quality so that our guests can focus on the most important thing; the transformative and immersive travel experiences we offer around the world. Through our sustainability efforts and vision to Make Travel Matter, taking care of our people and guests and constantly innovating on new ways to Make Travel Personal, we exist to create life-changing moments for every guest who travels with any of our 40 award-winning brands. </p>
		</div>
	</div>
</div>
 </div>
 <br><br><br>


<br><br><br>

<section id="works">
  <div class="container">
    <br><br><br>
    <h1 style="text-align: center; font-size: 50px;">How it works</h1>
    <br><br><br>
    <div class="row align-items-center">
      <div class="col d-flex justify-content-center">
        <span class="icon">
          <img src="assets/1.png">
        </span>
      </div>
      <div class="col d-flex justify-content-center">
        <span class="icon">
          <img src="assets/2.png">
        </span>
      </div>
    </div>
    <br>
    <div class="row align-items-center">
      <div class="col d-flex justify-content-center">
        <h3> Select Destination</h3>
      </div>
      <div class="col d-flex justify-content-center">
        <h3> Choose Package</h3>
      </div>
    </div>

    <br><br>
    <div class="row align-items-center">
      <div class="col d-flex justify-content-center">
        <span class="icon">
          <img src="assets/3.png">
        </span>
      </div>
      <div class="col d-flex justify-content-center">
        <span class="icon">
          <img src="assets/4.png">
        </span>
      </div>
    </div>
    <br>
    <div class="row align-items-center">
      <div class="col d-flex justify-content-center">
        <h3> Select Hotel</h3>
      </div>
      <div class="col d-flex justify-content-center">
        <h3> Book Flight</h3>
      </div>
    </div>

    <br><br>
  </div>
</section>
<br><br><br><br>


<!-- Destinations -->
<section id="destinations">
<div class= "dest-heading">
    <h1>Destinations</h1>
</div>
<br><br><br>
<div class="slideshow-container">
    <h2>Seoul, South Korea</h2> <br><br>
  <div class="mySlides1 fade">
    <img src="images/soule1.jpeg" style="width:100%">
  </div>

  <div class="mySlides1 fade">
    <img src="images/soule2.jpeg" style="width:100%">
  </div>

  <div class="mySlides1 fade">
    <img src="images/soule3.jpeg" style="width:100%">
  </div>

</div>

<br><br><br>
<div class="slideshow-container">
    <h2>Paris, France</h2> <br><br>
  <div class="mySlides2 fade">
    <img src="images/paris1.jpeg" style="width:100%">
  </div>

  <div class="mySlides2 fade">
    <img src="images/paris2.jpeg" style="width:100%">
  </div>

  <div class="mySlides2 fade">
    <img src="images/paris3.jpeg" style="width:100%">
  </div>

</div>

<br><br><br>
<div class="slideshow-container">
    <h2>Sydney, Australia</h2> <br><br>
  <div class="mySlides3 fade">
    <img src="images/sy1.jpeg" style="width:100%">
  </div>

  <div class="mySlides3 fade">
    <img src="images/sy2.jpeg" style="width:100%">
  </div>

  <div class="mySlides3 fade">
    <img src="images/sy3.jpeg" style="width:100%">
  </div>

</div>

<br><br><br>
<div class="slideshow-container">
    <h2>New York, USA</h2> <br><br>
  <div class="mySlides4 fade">
    <img src="images/new1.jpeg" style="width:100%">
  </div>

  <div class="mySlides4 fade">
    <img src="images/new2.jpeg" style="width:100%">
  </div>

  <div class="mySlides4 fade">
    <img src="images/new3.jpeg" style="width:100%">
  </div>

</div>

<br><br><br>
<div class="slideshow-container">
    <h2>Spain, Europe</h2> <br><br>
  <div class="mySlides5 fade">
    <img src="images/spain1.jpeg" style="width:100%">
  </div>

  <div class="mySlides5 fade">
    <img src="images/spain2.jpeg" style="width:100%">
  </div>

  <div class="mySlides5 fade">
    <img src="images/spain3.jpeg" style="width:100%">
  </div>

</div>

<br><br><br>
<div class="slideshow-container">
    <h2>Torronto, Canada</h2> <br><br>
  <div class="mySlides6 fade">
    <img src="images/tor1.jpeg" style="width:100%">
  </div>

  <div class="mySlides6 fade">
    <img src="images/tor2.jpeg" style="width:100%">
  </div>

  <div class="mySlides6 fade">
    <img src="images/tor3.jpeg" style="width:100%">
  </div>

</div>
<br><br><br><br>
</section>

    <!--=============== PRICING ===============-->
    <section id="packages" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="page-heading">
                        <h1>Our Packages</h1> <br><br>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit.</p>
                    </div><!-- end page-heading -->
                    <br><br>
                    <div class="row" id="price-tables">

                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 column-padding text-center">
                            <div class="price-table">
                                <div class="p-table-heading">
                                    <h2 class="title">Couple</h2>
                                    <h2 class="price"><span>2 Persons</span></h2>
                                    <h2 class="price">20%<span> off</span></h2>
                                </div><!-- end p-table-heading -->

                                <div class="features">
                                    <ul class=" list-unstyled text-center">
                                        <li>Breakfast</li>
                                        <li>Private Balcony</li>
                                        <li>Sea View</li>
                                        <li>Free Wifi</li>
                                        <li>Bathroom</li>
                                        <li>Water Heated pool</li>
                                    </ul>
                                    
                                </div><!-- end features -->
                            </div><!-- end price-table -->
                        </div><!-- end columns -->


                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 column-padding text-center">
                            <div class="price-table">
                                <div class="p-table-heading">
                                    <h2 class="title">Friends</h2>
                                    <h2 class="price"><span>5 Persons</span></h2>
                                    <h2 class="price">30%<span> off</span></h2>
                                </div><!-- end p-table-heading -->

                                <div class="features">
                                    <ul class=" list-unstyled text-center">
                                        <li>Breakfast</li>
                                        <li>Private Balcony</li>
                                        <li>Sea View</li>
                                        <li>Free Wifi</li>
                                        <li>Bathroom</li>
                                        <li>Water Heated pool</li>
                                    </ul>
                                    
                                </div><!-- end features -->
                            </div><!-- end price-table -->
                        </div><!-- end columns -->


                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 column-padding text-center">
                            <div class="price-table">
                                <div class="p-table-heading">
                                    <h2 class="title">Family</h2>
                                    <h2 class="price"><span>10 Persons</span></h2>
                                    <h2 class="price">40%<span> off</span></h2>
                                </div><!-- end p-table-heading -->

                                <div class="features">
                                    <ul class=" list-unstyled text-center">
                                        <li>Breakfast</li>
                                        <li>Private Balcony</li>
                                        <li>Sea View</li>
                                        <li>Free Wifi</li>
                                        <li>Bathroom</li>
                                        <li>Water Heated pool</li>
                                    </ul>
                                    
                                </div><!-- end features -->
                            </div><!-- end price-table -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end pricing -->

<!-- booking -->
<br><br><br><br><br>
<div id="booking" style="background: url('images/travel-bg.jpeg');">
<div class="container">
<br><br><br><br>
	<div class="row align-items-center">
		<div class="col d-flex justify-content-center">
			<h1 style="font-family: 'Mochiy Pop P One';"> Book your Trip now</h1>
		</div>
	</div>
	<br><br>
	<div class="row align-items-center">
		<div class="col d-flex justify-content-center">
			<button type="button" class="btn btn-primary" id="book-btn" onclick= "window.location= 'redirect.php' "> Book a Trip </button>
		</div>
	</div>
</div>
</div>

<br><br><br><br><br>
<!-- FAQ -->
<section>
  <h1 style="text-align: center;" id="faq"> FAQs</h1>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto">
        <!-- Accordion -->
        <div id="accordionExample" class="accordion shadow">
  
          <!-- Accordion item 1 -->
          <div class="card">
            <div id="headingOne" class="card-header bg-white shadow-sm border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark text-uppercase collapsible-link py-2">Which cities you offer your trips?</a></h6>
            </div>
            <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
              <div class="card-body p-5">
                <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
              </div>
            </div>
          </div>
  
          <!-- Accordion item 2 -->
          <div class="card">
            <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">What are some trip packages?</a></h6>
            </div>
            <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
              </div>
            </div>
          </div>
  
          <!-- Accordion item 3 -->
          <div class="card">
            <div id="headingThree" class="card-header bg-white shadow-sm border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">How to book a trip?</a></h6>
            </div>
            <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>
  
</section>
<br><br><br><br>
<?php include("footer.html"); ?>


<script type="text/javascript">
    // clouds text
    let text =document.getElementById('text');
    window.addEventListener('scroll', function(){
    let value= window.scrollY;
    text.style.marginBottom= value * 2 + 'px';
    })
    
</script>

<script src="scripts/slider.js"></script>




<!-- bootstrap js-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>