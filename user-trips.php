<?php
	session_start();
	include_once('navbar2.php');
	include_once('config.php');
	$id= $_SESSION['login-id'];
?>
<html>
<head>
<title> User Trips </title>
<link rel="icon" type="image/x-icon" href="assets/favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<br>

<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Trip#</th>
      <th scope="col">Location</th>
      <th scope="col">Destination</th>
      <th scope="col">Package</th>
	  <th scope="col">Hotel</th>
	  <th scope="col">Rooms</th>
	  <th scope="col">Airline</th>
	  <th scope="col">Dep. Date</th>
	  <th scope="col">Arrival Date</th>
	  <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
 <?php 
	$q= mysqli_query($link, "SELECT * FROM booked_trips WHERE user_id= '$id' ");
	while($res= mysqli_fetch_array($q)){
 ?>
    <tr>
      <th scope="row"><?php echo $res['trip_id']; ?> </th>
      <td><?php echo $res['country']; ?></td>
      <td><?php echo $res['destination']; ?></td>
      <td><?php echo $res['package']; ?></td>
	  <td><?php echo $res['hotel']; ?></td>
	  <td><?php echo $res['rooms']; ?></td>
	  <td><?php echo $res['flight']; ?></td>
	  <td><?php echo $res['departure']; ?></td>
	  <td><?php echo $res['arrival']; ?></td>
	  <td class="table-active"><?php echo "$".$res['price']; ?></td>
    </tr>
<?php } ?>
  </tbody>
</table>
<br><br><br><br><br><br><br>
</div>

</body>
</html>

<?php include_once('footer.html'); ?>