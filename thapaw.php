<?php
$signup = 0;
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
  die("there is some error :-" . mysqli_connect_error());
} else {
  //echo ("you are connect sucessfully");
}
if (isset($_POST['user'])) {
  $username = $_POST['user'];
  $age =  $_POST['age'];
  $gender = $_POST['gender'];
  $number = $_POST['phone'];
  $date = $_POST['date'];
  $password = $_POST['password'];

  $sql = "INSERT INTO `wtourist`.`signup`(`username`, `age`, `gender`, `number`, `date`, `password`) VALUES ('$username', '$age', '$gender', '$number', '$date', '$password')";
  if ($con->query($sql) == true) {
    header('location: newp.php');
    //$signup = 1;
  } else {
    $signup = 2;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>W Tourist</title>
  <link rel="stylesheet" href="thpaw.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">W Tourist</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>
  <section>
    <div id="myCarousel" class="carousel slide img" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="los.jpg" alt="Chania">
          <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
          </div>
        </div>

        <div class="item">
          <img src="cicago.jpg" alt="Chicago">
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>

        <div class="item">
          <img src="ny.jfif" alt="New York">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
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
  </section>
  <section class="my-5">
    <div class="font">
      <h1 class="text-center">About Us</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 img">
          <img src="ny.jfif" class="img-fluid"></img>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-12">
          <h2 class="head">W Tourist</h2>
          <p class="para">We have designed this website to let you explore Kenya and discover the untold wealth of destinations and experiences available to the visitor. If you planning a trip to Kenya or<br>
            just interested in learning more about the country, you'll find everything you are looking for here</p>
          <a class="more" href="about.php">check more</a>

        </div>
      </div>
    </div>
  </section>
  <section class="my-5">
    <div class="font">
      <h1 class="text-center">Our Services</h1>
    </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 ">
          <div class="card">
            <img class="card-img-top" src="taj.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Taj Mahal</h4>
              <p class="card-text">the Taj Mahal is the jewel of Muslim art in India and<br>
                one of the universally admired masterpieces of the world's heritage.</p>
              <a href="profile1.php" class="btn btn-primary">Know more</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 ">
          <div class="card">
            <img class="card-img-top" src="effiel.jpeg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Effiel Tower</h4>
              <p class="card-text">The tower is 324 metres (1,063 ft) tall, about the same height as an 81-storey building, and the tallest structure in Paris. <br>
              </p>
              <a href="profile1.php" class="btn btn-primary">Know more</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 ">
          <div class="card">
            <img class="card-img-top" src="china.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Great Wall of China</h4>
              <p class="card-text">The Great Wall of China is a series of fortifications that were built across the historical northern borders
                of ancient Chinese states </p>
              <a href="profile1.php" class="btn btn-primary">Know more</a>
            </div>
          </div>


        </div>

      </div>
  </section>
  <section>
    <div class="font">
      <h1 class="text-center">Gallery</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 cpl-sm-4">
          <img class="gal" src="tour.jpg" alt="galery"></img>
        </div>
        <div class="col-lg-4 col-md-4 cpl-sm-4">
          <img class="gal" src="tour.jpg" alt="galery"></img>
        </div>
        <div class="col-lg-4 col-md-4 cpl-sm-4">
          <img class="gal" src="tour.jpg" alt="galery"></img>
        </div>
        <div class="col-lg-4 col-md-4 cpl-sm-4">
          <img class="gal" src="tour.jpg" alt="galery"></img>
        </div>
        <div class="col-lg-4 col-md-4 cpl-sm-4">
          <img class="gal" src="tour.jpg" alt="galery"></img>
        </div>
        <div class="col-lg-4 col-md-4 cpl-sm-4">
          <img class="gal" src="tour.jpg" alt="galery"></img>
        </div>
        <div class="col-lg-4 col-md-4 cpl-sm-4">
          <img class="gal" src="tour.jpg" alt="galery"></img>
        </div>
        <div class="col-lg-4 col-md-4 cpl-sm-4">
          <img class="gal" src="tour.jpg" alt="galery"></img>
        </div>
        <div class="col-lg-4 col-md-4 cpl-sm-4">
          <img class="gal" src="tour.jpg" alt="galery"></img>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="font">
      <h1 class="text-center">Signup Form</h1>
      <div class="check">
        <p class="text-center"><?php
                                if ($signup == 1) {
                                  echo "your form is successfully submit";
                                }
                                if ($signup == 2) {
                                  echo "there is some problem please refresh the page";
                                }
                                ?>
        </p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-0"></div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="form-group">
            <form action="thapaw.php" method="post">
              <label>Username</label>
              <input type="text" name="user" autocomplete="off" class="form-control" </div>
          </div>
          <div class="form-group">
            <label>Age</label>
            <input type="int" name="age" autocomplete="off" class="form-control" </div>
          </div>

          <fieldset>
            <p>
              <legend>Gender</legend>
              male:<input type="radio" name="gender" value="male" autocomplete="off">

              female:<input type="radio" name="gender" value="female" autocomplete="off">
            </p>
          </fieldset>

          <div class="form-group">
            <label>Phone number</label>
            <input type="int" name="phone" autocomplete="off" class="form-control" </div>
          </div>
          <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" autocomplete="off" class="form-control" </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" autocomplete="off" class="form-control" </div>
          </div>
          <div class="btnn">
            <button class="btn btn-primary" type="submit">submit</button>
          </div>

        </div>
      </div>
      </form>
  </section>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>