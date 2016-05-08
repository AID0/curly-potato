<?php
include "info.php";

$bet = $_POST["bet"];

$coin1 = rand(1,2);

if($coin1 == 1){
    $winnings = $bet*2;
    echo "You Win " . $winnings . "<br/> <img src=" . $uAvatar . " height='100'>";
}else{
   echo "You Lose <br/> <img src='Logo.png' height='100'>";
}
?>

        <canvas id="coinAnimation"></canvas>
        <script src="sprite-animation-demo.js"></script>