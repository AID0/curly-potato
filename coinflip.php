<?php
include "header.php";
?>

        <h3>Play Coinflip Now</h3>
<?php
if($_SESSION['steamid']){
    ?>

        <form class="form-inline" role="form" method="post" action="coinbet.php" onsubmit="target_popup(this)">
            <div class="form-group">
        <input class="form-control" type="text" placeholder="0.00" name="bet">
            </div>
        <input type="submit" value="Bet" class="btn btn-default">
        </form>
        <script>
        function target_popup(form) {
    window.open('', 'formpopup', 'width=400,height=400,resizeable,scrollbars');
    form.target = 'formpopup';
}
        </script>

<?php
}else{
?>
            <form class="form-inline" role="form" method="post" action="login_steam.php">
            <div class="form-group">
        <input class="form-control" type="text" placeholder="0.00" name="bet">
            </div>
        <input type="submit" value="Login to bet" class="btn btn-default">
        </form>

<?php
}
?>

      </div><!--/Jumbotron -->

    </div> <!-- /container -->
</section>
<?php
include "footer.php";
?>