<?php
	session_start();
	include_once('config.php');
	$id= $_SESSION['id'];
	$d= $_POST['dep'];
	$a= $_POST['arr'];
	$air= $_POST['airline'];
	
	$que= "UPDATE booked_trips SET departure='$d', arrival='$a', flight='$air' WHERE trip_id='$id' ";	
	$q= mysqli_query($link,$que);
	
	// selecting all data
	$q= mysqli_query($link, "SELECT * FROM booked_trips WHERE trip_id='$id'");
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Trip is Booked</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Your trip is booked!</h5>
                <button type="button" class="close" data-dismiss="modal" onclick="window.location= 'user-trips.php'">&times;</button>
            </div>
            <div class="modal-body">
				<p><b> Trip ID# <?php echo $id;?></b></p>
				<?php
					while($res= mysqli_fetch_array($q)){
						echo "<p>"."<b>"."Destination: "."</b>".$res['destination']."</p>";
						echo "<p>"."<b>"."Package: "."</b>".$res['package']."</p>";
						$h= $res['hotel'];
						echo "<p>"."<b>"."Hotel: "."</b>".$h."</p>";
						$f= $res['flight'];
						echo "<p>"."<b>"."Airline: "."</b>".$f."</p>";
					}
					// calculating total amount to pay
					$que1= mysqli_query($link, "SELECT price FROM hotel WHERE hot_Name= '$h' ");
					$hotel_price= mysqli_fetch_array($que1);
					$que2= mysqli_query($link, "SELECT ticket_price FROM airline WHERE company= '$f' ");
					$ticket_price= mysqli_fetch_array($que2);
					$total_price= $hotel_price['price'] + $ticket_price['ticket_price'];
					$que= "UPDATE booked_trips SET price='$total_price' WHERE trip_id='$id' ";	
					$q= mysqli_query($link, $que);
					echo "<center>";
					echo "<h4>"."Total amount to pay is "."</h4>";
					echo "<h3>"."$".$total_price."</h3>";
				?>
				<br>
				<button onclick='window.location= "user-trips.php"' type='button' class='btn btn-primary'>Ok</button>
				</center>
				
            </div>
        </div>
    </div>
</div>
</body>
</html>