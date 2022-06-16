<?php  include('navbar2.php'); ?>
<html>
    <head>
        <title>Destinations</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <style>
            #destinations{
                font-size: 20px;
            }
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
    <img src="images/dest.gif" style="width: 100%">
    <br><br><br>
    <div class="container" id="destinations">
    <form action="packages.php" method="post">
    <div class="row align-items-center">
        <div class="col d-flex justify-content-center">
            <label>From</label> &nbsp;&nbsp;&nbsp;&nbsp;
            
            <select name="country" class="form-select" aria-label="Default select example" required>
              <option selected disabled>Select your country</option>
              <option value="Pakistan">Pakistan</option>
              <option value="India">India</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Sri Lanka">Sri Lanka</option>
              <option value="Afghanistan">Afghanistan</option>
              <option value="UAE">UAE</option>
            </select>
        </div>
        <div class="col d-flex justify-content-center">
            <label>To</label> &nbsp;&nbsp;&nbsp;&nbsp;
            <select name="dest" class="form-select" aria-label="Default select example" required>
              <option selected disabled>Select your destination</option>
              <option value="Seoul, South Korea">Seoul, South Korea</option>
              <option value="Paris, France">Paris, France</option>
              <option value="Sydney, Australia">Sydney, Australia</option>
              <option value="New York, USA">New York, USA</option>
              <option value="Spain, Europe">Spain, Europe</option>
              <option value="Torronto, Canada">Torronto, Canada</option>
            </select>
        </div>
    </div>
    <br><br>
    <div class="row align-items-center">
        <div class="col d-flex justify-content-center">
            <input type="submit" value="Save" class="btn btn-primary" id="btn">
        </div>
    </div>
    </form>
    </div>
    <br><br><br>
<?php include('footer.html'); ?>


</body>
</html>



