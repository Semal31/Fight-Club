<?php 
// Users - Semal, Brendan Passwords - Password, Brendan
    require "header.php";
?>

    <main>
        <?php
            if (isset($_SESSION['userid'])) {
                require './includese/dbh.inc.php';
                require 'loggedin.php';
            }
        ?>
    </main>
    
<?php
    require "footer.php";
?>