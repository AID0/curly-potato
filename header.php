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
 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="Logo.png" height="50"><a class="navbar-brand" href="http://csgo.molloy.ie">CSGO Shamrock</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://csgo.molloy.ie">Home</a></li>
            <li><a href="coinflip.php">Coinflip</a></li>
            <li><a href="#contact">How to Play</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              
<?php
if(!$_SESSION['steamid']){
            echo "";
}else{
?>
              <li><img src="Shamrockglyph.png" height="50"></li>
              <li>
                  <a><?php echo $uShamrocks; ?> </a>
                  
              </li>
              <li><a>&nbsp;</a></li>
              
              <li>
                  <img src="<?php  echo $uAvatar; ?>" height="50">
              </li>
<?php
};
                  ?>
              
            <?php
if(!$_SESSION['steamid']){
            echo "<li>";
            echo "<form action='login_steam.php' method='post'>";
            echo "<p></p><input type='image' src='https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_small.png'>";
            echo "</form>";
            echo "</li>";
}else{
                ?>
              
                            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="account.php">Your Account</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Withdraw</a></li>
                <li role="separator" class="divider"></li>
                <li><a href='logout_steam.php'>Log Out</a></li>
              </ul>
            </li>
              
                <?php
};
?>
              
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
    <p></p>
    <section>
 <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
