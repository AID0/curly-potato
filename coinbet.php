<?php
session_start();
include "info.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Shamrock.png">

    <title>CS:GO Shamrock</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
 
              <img src="Shamrockglyph.png" height="50">
              
                  <a><?php echo $uShamrocks; ?> </a>
                  

              
              
                  <img src="<?php  echo $uAvatar; ?>" height="50">
              
              
    </nav>
</header>
    <p></p>
    <section>
 <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">

<?php

$bet = $_POST["bet"];
if($bet< 0.10){
    echo "<br><h1 style='text-align:center;'>Minimum Bet of 0.10</h1>";
}else{
if($bet > $uShamrocks){
    echo "<br><h1 style='text-align:center;'>You dont have the money baaai go, find a <br>job, rent a house, pay off your mortgages and comeback later and thank me</h1>";
}else{

$coin1 = rand(1,100);

if($coin1 < 50){
    $winningslite = $bet*2;
    $fee = $winningslite*0.01;
    $winnings = $winningslite - $fee;
    $balance = $winnings + $uShamrocks - $bet;
    
        $sql_send = "UPDATE users_steam SET shamrocks='$balance' WHERE steamid = $steamid";
                    mysqli_query($db, $sql_send);
    
    echo "You Win " . $winnings . "<br/> <img src=" . $uAvatar . " height='100'> <br> You now own " . $balance . "!";
}else{
    $balance = $uShamrocks - $bet;
     $sql_send = "UPDATE users_steam SET shamrocks='$balance' WHERE steamid = $steamid";
                    mysqli_query($db, $sql_send);
   echo "You Lose <br/> <img src='Logo.png' height='100'>";
}
   ?> <br/>
        <canvas id="coinAnimation"></canvas>
        <script src="sprite-animation-demo.js"></script>
          <?php
}
}
?>
