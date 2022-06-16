<?php  
    session_start();
    $id= rand(1000,9999);
    $_SESSION['id'] = $id;
	$user_id= $_SESSION['login-id'];
	include('navbar2.php'); 
    include_once('config.php');
    
	
    $c= $_POST['country'];
    $d= $_POST['dest'];
    
    $q= mysqli_query($link, "INSERT INTO booked_trips VALUES('$id','$user_id','$c','$d','','','','','','','')");
?>
<html>
    <head>
        <title>Packages</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/packages.css">
        <style>
            #destinations{
                font-size: 20px;
            }
            #btn{
        	background-color: #2bcac9;
        	border: none;
        	width: 150px;
        	padding: 10px;
        	font-size: 20px;
        	cursor: pointer;
          }
        
            #btn:hover{
            	background-color: #2bcacabd;
            }
        </style>
    </head>
    
<body>
    <br><br><br>
    <img src="images/package.gif" style="width: 100%">
    <br><br><br>
    
    <section id="packages" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
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
                                    <form action="hotels.php" method="post">
                                        <input type="text" name="package" value="couple" hidden>
                                    <input type="submit" value="Select" id="btn">
                                    </form>
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
                                    <form action="hotels.php" method="post">
                                        <input type="text" name="package" value="friends" hidden>
                                    <input type="submit" value="Select" id="btn">
                                    </form>
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
                                    <form action="hotels.php" method="post">
                                        <input type="text" name="package" value="family" hidden>
                                    <input type="submit" value="Select" id="btn">
                                    </form>
                                </div><!-- end features -->
                            </div><!-- end price-table -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end pricing -->

    <br><br><br>
    
<?php include('footer.html'); ?>


</body>
</html>



