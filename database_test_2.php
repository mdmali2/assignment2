<html lang="en">
<head>

  <!-- Website Title & Description for Search Engine purposes -->
  <title></title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- Bootstrap CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="includes/css/styles.css" rel="stylesheet">

  <!-- Include Modernizr in the head, before any other Javascript -->
  <script src="includes/js/modernizr-2.6.2.min.js"></script>

</head>
<body>

<div class="container" id="main">
    <div class="navbar navbar-fixed-top">
<div class="container">

  <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
  <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>

  <a class="navbar-brand" href="/"><img src="images/logo.png" alt="Your Logo"></a>

  <div class="nav-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active">
        <a href="#">Home</a>
      </li>
      <li>
          <a href="database_test_2.php">Customer Info</a>
      </li>


    </ul>

    <ul class="nav navbar-nav pull-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>

        <ul class="dropdown-menu">
          <li>
            <a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
          </li>

          <li>
            <a href="#"><span class="glyphicon glyphicon-refresh"></span> Login</a>
          </li>

        </ul>
      </li><!-- end drop down -->
    </ul><!-- end nav pull-right -->
  </div><!-- end nav-collapse -->

</div><!-- end container -->
</div><!-- end navbar -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>

<html lang="en">
<head>

  <!-- Website Title & Description for Search Engine purposes -->
  <title></title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- Bootstrap CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="includes/css/styles.css" rel="stylesheet">

  <!-- Include Modernizr in the head, before any other Javascript -->
  <script src="includes/js/modernizr-2.6.2.min.js"></script>

</head>
<body>

<div class="container" id="main">
    <div class="navbar navbar-fixed-top">
<div class="container">

  <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
  <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>

  <a class="navbar-brand" href="/"><img src="images/logo.png" alt="Your Logo"></a>

  <div class="nav-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active">
        <a href="index.html">Home</a>
      </li>
      <li>
          <a href="database_test_2.php">Customer Info</a>
      </li>


    </ul>

    <ul class="nav navbar-nav pull-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>

        <ul class="dropdown-menu">
          <li>
            <a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
          </li>

          <li>
            <a href="#"><span class="glyphicon glyphicon-refresh"></span> Login</a>
          </li>

        </ul>
      </li><!-- end drop down -->
    </ul><!-- end nav pull-right -->
  </div><!-- end nav-collapse -->

</div><!-- end container -->
</div><!-- end navbar -->
<br/> <br/> <br/> <br/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>

<?php // query.php

// require_once 'login.php';

// login.php
$hn = 'www.it354.com';
$db = 'it354_students';
$un = 'it354_students';
$pw = 'steinway';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM customers";
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;

for ($j = 0 ; $j < $rows ; ++$j)
{
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_ASSOC);
<<<<<<< HEAD
  
=======

>>>>>>> 3bf1b404824967f4f915e15caaf908b248b16b88
  echo $row['firstName'] . '<br>';
  echo $row['lastName'] . '<br>';
	echo $row['address'] . '<br>';
  echo $row['city'] . '<br>';
	echo $row['state'] . '<br>';
	echo $row['zip'] . '<br>';
	echo $row['email'] . '<br>';
	echo $row['phone'] . '<br><br>';
}

$result->close();
$conn->close();
?>