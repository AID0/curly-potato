<?php
include "header.php";
?>

<div class="row">

        <div class="col-sm-4"><h2></h2><img src="<?php echo $uAvatar; ?>" height="150">
        <h4><a href="settings.php">Edit Profile</a></h4>
        <h3>Name: <?php echo $uName; ?></h3>
        <h3>Steam ID:</h3><?php echo $steamid; ?>
        <h3>Trade URL:</h3><?php 
            
            if(strlen($uTrade) == 0){
                ?>
            <form class="form-inline" role="form" method="post" action="settings.php">
            <div class="form-group">
        <input class="form-control" type="text" placeholder="TradeURL" name="trade">
            </div>
        <input type="submit" value="Save" class="btn btn-default">
        </form>
            <?php
            }else{
            
            echo $uTrade; 
            }
            ?>
    </div>
        
        <div class="col-sm-8"></div>
    


</div>
      </div><!--/Jumbotron -->

    </div> <!-- /container -->
</section>
<?php
include "footer.php";
?>