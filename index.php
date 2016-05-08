<?php
include "header.php";
?>

<div class="row">

        <div class="col-md-2"><img src="Logo.png" height="150"></div>
        <div class="col-md-4"><h2>Coin Flip</h2>
<p>50/50 Chance to win <br>Get back double what you bet<br>Fee: 1% winners cut</p></div>
    <div class="col-md-6">
        <h3>Try it for Free!</h3>
        <form class="form-inline" role="form" method="post" action="coin.php" onsubmit="target_popup(this)">
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

    </div>
    


</div>
      </div><!--/Jumbotron -->

    </div> <!-- /container -->
</section>
<?php
include "footer.php";
?>