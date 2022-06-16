<?php  
    session_start();
    include('navbar2.php'); 
    include_once('config.php');
    
    $tr= $_POST['rooms'];
    $h= $_POST['hotel'];
    $id= $_SESSION['id'];
    $que= "UPDATE booked_trips SET hotel='$h', rooms='$tr' WHERE trip_id='$id' ";
    $q= mysqli_query($link, $que);
	
?>
<html>
    <head>
        <title>Flight Booking</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
        <link rel="stylesheet" href="css/flight.css">
		
        <style>
            #btn{
        	background-color: #2bcac9;
        	border: none;
        	width: 250px;
        	padding: 10px;
        	border-radius: 20px;
        	font-size: 20px;
          }
        
            #btn:hover{
            	background-color: #2bcacabd;
            }
        </style>
    </head>
    
<body>
    <br><br><br>
    <img src="images/flight.gif" style="width: 100%">
    <br><br><br>
	
	<!-- Showing airlines -->
<div class="container airlines mt-2">
  <div class="row align-items-center">
    <div class="col item d-flex justify-content-center">
      <div class="card item-card card-block">
    <img src="https://logo-logos.com/wp-content/uploads/2016/11/Singapore_Airlines_logo_blue.png" >
        <h5 class="card-title  mt-3 mb-3">Singapore Airlines</h5>
		<h5 class="card-title  mt-3 mb-3">$200</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor felis ac sollicitudin aliquet.  </p> 
  </div>
    </div>
    <div class="col item d-flex justify-content-center">
      <div class="card item-card card-block">
    <img src="https://logos-world.net/wp-content/uploads/2020/03/Emirates-Logo-1999.jpg" >
        <h5 class="card-title  mt-3 mb-3">Emirates</h5>
		<h5 class="card-title  mt-3 mb-3">$250</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor felis ac sollicitudin aliquet.  </p> 
  </div>
    </div>
    <div class="col item d-flex justify-content-center">
      <div class="card item-card card-block">
    <img src="https://logos-world.net/wp-content/uploads/2020/03/Qatar-Airways-Logo-2006-present.jpg" >
        <h5 class="card-title  mt-3 mb-3">Qatar Airways</h5>
		<h5 class="card-title  mt-3 mb-3">$250</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor felis ac sollicitudin aliquet.  </p> 
  </div>
    </div>    
  </div>
  <br><br>
  <div class="row align-items-center">
    <div class="col item d-flex justify-content-center" >
      <div class="card item-card card-block">
    <img src="https://i.pinimg.com/originals/3d/c9/e6/3dc9e6b924be0835ea6bb4abea2d780f.png" >
        <h5 class="card-title  mt-3 mb-3">Cathay Pacific Airways</h5>
		<h5 class="card-title  mt-3 mb-3">$200</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor felis ac sollicitudin aliquet.  </p> 
  </div>
    </div>
    <div class="col item d-flex justify-content-center">
      <div class="card item-card card-block">
    <img src="https://www.aviatorcapital.com/wp-content/uploads/2019/09/Virgin-atlantic-logo.jpg" >
        <h5 class="card-title  mt-3 mb-3">Virgin Atlantic Airways</h5>
		<h5 class="card-title  mt-3 mb-3">$220</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor felis ac sollicitudin aliquet.  </p> 
  </div>
    </div>
    <div class="col item d-flex justify-content-center">
      <div class="card item-card card-block">
    <img src="https://i.pinimg.com/originals/26/0e/68/260e68fcbf146e06932fddbd2e1bab5b.jpg" >
        <h5 class="card-title  mt-3 mb-3">Thai Airways International</h5>
		<h5 class="card-title  mt-3 mb-3">$230</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor felis ac sollicitudin aliquet.  </p> 
  </div>
    </div>    
  </div>
  
</div>
<br><br>
    <div class="container" id="flight">
    <form action="booked.php" method="post">
    <div class="row align-items-center">
        <div class="col d-flex justify-content-center">
            <label><b>Departure Day</b></label> &nbsp;&nbsp;&nbsp;&nbsp;
            
            <input type="date" name="dep" required>
        </div>
        <div class="col d-flex justify-content-center">
            <label><b>Arrival Day</b></label> &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" name="arr" required>
        </div>
    </div>
    <br><br>
	<div class="row align-items-center">
        <div class="col d-flex justify-content-center">
            <label><b>Airline</b></label> &nbsp;&nbsp;&nbsp;&nbsp;
            
            <select name="airline" class="form-select" aria-label="Default select example" required>
              <option selected disabled>Select airline</option>
              <option value="Singapore Airlines">Singapore Airlines</option>
              <option value="Emirates">Emirates</option>
              <option value="Qatar Airways">Qatar Airways</option>
              <option value="Cathay Pacific Airways">Cathay Pacific Airways</option>
              <option value="Virgin Atlantic Airways">Virgin Atlantic Airways</option>
              <option value="Thai Airways International">Thai Airways International</option>
            </select>
        </div>
    </div>
	<br><br>
    <div class="row align-items-center">
        <div class="col d-flex justify-content-center">
            <input type="submit" value="Book" class="btn btn-primary" id="btn">
        </div>
    </div>
    </form>
    </div>
    <br><br><br>
<?php include('footer.html'); ?>


</body>
</html>



