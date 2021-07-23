<?php
    require "header.php"
?>

<main>
    <?php
        if(isset($_SESSION['userId']))
        {
            echo '<p>You are logged in</p>';
        }
        else
        {
            echo '<p>Your typing stats wont be stored since you are not logged in!</p>';
        }
    ?>

</main>

<?php
    require "footer.php"
?>