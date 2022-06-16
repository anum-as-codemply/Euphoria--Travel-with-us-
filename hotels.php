<?php  
    session_start();
    include('navbar2.php'); 
    include_once('config.php');
    
	$id= $_SESSION['id'];
	if(isset($_POST['package'])){
		$p= $_POST['package'];
		$q= mysqli_query($link, "UPDATE booked_trips SET package= '$p' WHERE trip_id='$id' ");
	}
	$q= mysqli_query($link, "SELECT destination FROM booked_trips WHERE trip_id='$id' ");
	$dest= mysqli_fetch_array($q);
	$d= $dest['destination'];
	
	$h1= $p1= $h2= $p2= $h3= $p3= "";
	// selecting hotel 1
	$q= mysqli_query($link,"SELECT * FROM hotel WHERE location= '$d' && hot_num= '1' ");
	while($res= mysqli_fetch_array($q)){
		$h1= $res['hot_Name'];
		$p1= $res['price'];
	}	
	// selecting hotel 2
	$q= mysqli_query($link,"SELECT * FROM hotel WHERE location= '$d' && hot_num= '2' ");
	while($res= mysqli_fetch_array($q)){
		$h2= $res['hot_Name'];
		$p2= $res['price'];
	}	
	// selecting hotel 3
	$q= mysqli_query($link,"SELECT * FROM hotel WHERE location= '$d' && hot_num= '3' ");
	while($res= mysqli_fetch_array($q)){
		$h3= $res['hot_Name'];
		$p3= $res['price'];
	}	
	
	if(isset($_POST['rooms'])){
		$r= $_POST['rooms'];
	}
?>
<html>
    <head>
        <title>Hotel Booking</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="stylesheet" href="css/hotel.css">
        
        <script src="https://kit.fontawesome.com/4138468106.js" crossorigin="anonymous"></script>
        
        <style>
            #btn{
        	background-color: #FCF39D;
        	border: none;
        	width: 150px;
        	padding: 10px;
        	font-size: 20px;
        	cursor: pointer;
          }
        
            #btn:hover{
            	background-color: #2bcac9;
            }
        </style>
    </head>
    
<body>
    <br><br><br>
    <img src="images/hotel.gif" style="width: 100%">
    <br><br><br>
    
<form action="" method="post">
    <div class="row align-items-center">
        <div class="col d-flex justify-content-center">
            <label><b>Total Rooms</b></label> &nbsp;&nbsp;&nbsp;&nbsp;
            
            <select name="rooms" class="form-select" aria-label="Default select example" required>
			<?php 
			 // to show saved value of total rooms selected
			  if(isset($_POST['rooms'])){
			  echo "<option selected disabled>".$r."</option>";
			  }
			  else
              echo "<option selected disabled>Select total rooms to book</option>";
			?>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
			&nbsp;&nbsp;&nbsp;
			<input type="submit" value= "Save" id="btn">
        </div>
    </div>
</form>
    <br><br>
    <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>    
        <div class="tm-page-wrap mx-auto">
            <div class="tm-container-outer" id="tm-section-3">
                <div class="tab-content clearfix">
                    
                    <div class="tab-pane fade show active" id="4a">
                    
                        <div class="tm-recommended-place-wrap">
						<!-- 1st hotel -->
                            <div class="tm-recommended-place">
                                <img src="images/signiel2.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title"><?php echo $h1; ?></h3>
                                  
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price"><?php echo "$".$p1; ?></p>
                                    <form action="flight.php" method="post">
                                    <p class="tm-recommended-price-link">
                                        <input type="text" name="hotel" value= "<?php echo $h1; ?>" hidden>
										<input type="text" name="rooms" value= "<?php if(isset($_POST['rooms'])){ echo $r;} ?>" hidden>
                                        <input type="submit" value="Book Hotel" id="btn"> 
                                    </p>
                                    </form>
                                </a>                        
                            </div>
							
							<!-- 2nd hotel -->
                            <div class="tm-recommended-place">
                                <img src="images/torontoa.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title"><?php echo $h2; ?></h3>
                                    
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <div id="preload-hover-img"></div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price"><?php echo "$".$p2; ?></p>
                                    <form action="flight.php" method="post">
                                    <p class="tm-recommended-price-link">
                                        <input type="text" name="hotel" value="<?php echo $h2; ?>" hidden>
										<input type="text" name="rooms" value= "<?php if(isset($_POST['rooms'])){ echo $r;} ?>" hidden>
                                        <input type="submit" value="Book Hotel" id="btn"> 
                                    </p>
                                    </form>
                                </a>
                            </div>

							<!-- 3rd hotel -->
                            <div class="tm-recommended-place">
                                <img src="images/france1.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title"><?php echo $h3; ?></h3>
                                    
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price"><?php echo "$".$p3; ?></p>
                                    <form action="flight.php" method="post">
                                    <p class="tm-recommended-price-link">
                                        <input type="text" name="hotel" value="<?php echo $h3; ?>" hidden> 
										<input type="text" name="rooms" value= "<?php  if(isset($_POST['rooms'])){ echo $r;} ?>" hidden>
                                        <input type="submit" value="Book Hotel" id="btn"> 
                                    </p>
                                    </form>
                                </a>
                            </div>

                            
                        </div>                        

                    </div> <!-- tab-pane -->			
                </div>
            </div>
        </div>
    </div> <!-- .main-content -->
    <br><br><br>
    
<?php include('footer.html'); ?>


</body>
</html>



