<?php

  require_once('classes/Compare.php');

  session_start();

  require_once('classes/Hotel.php');

  require_once('classes/Booking.php');
  

  //$name, $daily, $pool, $bar, $restaurant, $spa;
  $raddBlu = new Hotel('Raddison Blu', '600', false, true, true, false);
  $raddRed = new Hotel('Raddison Red', '580', false, true, false, true);
  $grndBlue = new Hotel('Grand Blue D', '900', true, false, false, true);

  $hotel1 = '';
  $hotel2 = '';
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Hotel Space</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap (2).css">
  <link rel="stylesheet" href="css/bootstrap.min (7).css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">

  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 30px;
      border-radius: 2px;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #222;
      padding: 25px;
    }

    




  </style>
</head>
<body background="images/bgh.jpg">
    <!--div class="bkColor"-->

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
      <img src="images/astr.png" alt="logo" style="width: 35px;">
    </a>
    
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href=”#Top”>Hotels</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Compare</a>
      </li>
    </ul>
  </nav>

  <div class="container">
     
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner" style="width: 100%; margin: 0 auto">
        <div class="item active">
          <img src="images/htl1.jpg"  style="width:100%;">
        </div>
  
        <div class="item">
          <img src="images/htl2.jpeg" style="width:100%;">
        </div>
      
        <div class="item">
          <img src="images/htl3.jpg" style="width:100%;">
        </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
  
  





<h1>Hotel Space</h1>
<h2 style="color: azure;">-Your Vission Your Intermission-</h2>

<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Details</div>
        <div class="panel-body">   <div class="row">                
          <div class="col">
            <input type="text" class="form-control" name="fname" placeholder="First name" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" name="lname" placeholder="Last name" required>
          </div>    
      </div>
       <br><br>
          Email Address:
            <div class="row">        
              <div class="col-10">
                  <label for="exampleFormControlInput1"></label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
              </div>
            </div> <br>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Check in/Out</div>
        <div class="panel-body">  <div class="row">
          <div class="col">
              <label for="birthday">Check in:</label>
              <input type="date" id="birthday" name="indate" placeholder="Check in" required>
          </div>
          <div class="col">
              <label for="birthday">Check out:</label>
              <input type="date" id="birthday" name="outdate" placeholder="Check out" required>
          </div>
      </div>
      
      <!--Submit Button-->
​
      <div class="row">
         <div class="col-8">  
              
          </div> 
      </div>
   </div>
        <div class="panel-footer"></div>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>





<div class="center">
  <div class="card mb-3 center" style="max-width: 530px;">
    <div class="row no-gutters">
      <div class="col-5">
  ​
        <img src="images/rblu.jpg" class="card-img" alt="...">
      </div>
      <div class="col-7">
        <div class="card-body">
          <h5 class="card-title">Radisson Blu</h5>
          <p class="card-text">Raddison Blu Stylish living spaces for business and leisure in some of the world’s favorite destinations</p>
          <p class="card-text"><small class="text-muted">Includes Restruant and bar</small></p>
          <input type="checkbox" name="htl1" value="true"><strong>COMPARE</strong>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 530px;">
    <div class="row no-gutters">
      <div class="col-md-5">
        <img src="images/rred.jpg" class="card-img" alt="...">
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Radisson Red</h5>
          <p class="card-text">Raddison Red Art, music, design, fashion: hotels with real urban energy</p>
          <p class="card-text"><small class="text-muted">Includes Bar</small></p>
          <input type="checkbox" name="htl2" value="true"><strong>COMPARE</strong>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 530px;">
    <div class="row no-gutters">
      <div class="col-md-5">
        <img src="images/htlspc.jpeg" class="card-img" alt="...">
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Grand Blue D</h5>
          <p class="card-text">Grand Blue D is a luxurious out of this world experience you will never forget</p>
          <p class="card-text"><small class="text-muted">Includes pool and spa</small></p>
          <input type="checkbox" name="htl3" value="true"><strong>COMPARE</strong>
        </div>
      </div>
    </div>
  </div>
</div>

<input class="btn btn-primary" id="sbmt-btn" type="submit" value="Compare">

</form>

<?php

if($_POST){
  if($hotel1 == ''){
    if($_POST['htl1'] == true){
      $hotel1 = 'Raddison Blu';
      $htl1 = $raddBlu;
    }
    elseif($_POST['htl2'] == true){
      $hotel1 = 'Raddison Red';
      $htl1 = $raddRed;
    }
    elseif($_POST['htl3'] == true){
      $hotel1 = 'Grand Blue D';
      $htl1 = $grndBlue;
    }
  }

  if($hotel2 == ''){
    if($_POST['htl2'] == true){
      $hotel2 = 'Raddison Red';
      $htl2 = $raddRed;
    }
    elseif($_POST['htl3'] == true){
      $hotel2 = 'Grand Blue D';
      $htl2 = $grndBlue;
    }
  }



$client1 = new Compare($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['indate'],$_POST['outdate'],$hotel1,$hotel2);

$client1->daysBooked($_POST['indate'],$_POST['outdate']);

$client1->displayInfo();

$client1->compareHotels($htl1,$htl2);

$client1->bookButton();

}

?>
</body>

<footer class="container-fluid text-center">
  <p>Contact number 026 337 7223</p>
</footer>



</html>