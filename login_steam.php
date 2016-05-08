<?php
    require 'openid.php';
    
    include_once("db.php");
    
    $_STEAMAPI = "D37F15EAF25AB11EF1CC1E55997A0B69";
    try {
    $openid = new LightOpenID('csgo.molloy.ie');
    if(!$openid->mode) {
        if(isset($_GET['login'])) {
            $openid->identity = 'http://steamcommunity.com/openid/?l=english';
            header('Location: ' . $openid->authUrl());
        }else{
            echo "<h2> Connect to Steam</h2>";
            echo "<form action='?login' method='post'>";
            echo "<input type='image' src='http://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_large_border.png'>";
            echo "<form>";
        }
    } elseif($openid->mode == 'cancel') {
        echo 'User has canceled authentication!';
    } else {
        if($openid->validate()) {
            $id = $openid->identity;
            $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
            preg_match($ptn, $id, $matches);
            
            $url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$_STEAMAPI&steamids=$matches[1]";
            $json_object = file_get_contents($url);
            $json_decoded = json_decode($json_object);
            
            foreach ($json_decoded->response->players as $player)
            {
                $sql_fetch_id = "SELECT * FROM users_steam WHERE steamid = $player->steamid";
                $query_id = mysqli_query($db, $sql_fetch_id);
                

                if(mysqli_num_rows($query_id) == 0) {
                    $sql_steam = "INSERT INTO users_steam (name, steamid, avatar, avatarfull, lvl, shamrocks) VALUES ('$player->personaname','$player->steamid','$player->avatar','$player->avatarfull','1','0')";
                    mysqli_query($db, $sql_steam);
                }
                
                $sql_steam = "INSERT INTO users_steam WHERE steamid = $player->steamid (name, avatar, avatarfull) VALUES ('$player->personaname','$player->avatar','$player->avatarfull')";
                    mysqli_query($db, $sql_steam);
            }

session_start();
$_SESSION['steamid'] = $player->steamid;
            
echo "<script> window.location.assign('index.php'); </script>";

        } else{
            echo "User is not logged in.\n";
        }
    }
} catch(ErrorException $e) {
    echo $e->getMessage();
}
?>