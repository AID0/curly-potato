<?php
session_start();

include_once("db.php");

if($_SESSION['steamid']){
    
$steamid = $_SESSION['steamid'];
     
$sql = "SELECT * FROM users_steam WHERE steamid = $steamid";
$result = mysqli_query($db, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $uId = $row['id'];
        $uName = $row['name'];
        $uAvatar = $row['avatarfull'];
        $uShamrocks = $row['shamrocks'];
        $uTrade = $row['trade'];
        
    }
}else{
echo "<h1>User not found</h1>";
}
                         
                     }
?>