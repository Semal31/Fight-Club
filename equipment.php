<?php 
    require "Employee/includese/dbh.inc.php";
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website for Fight Club">
    <meta name="keywords" content="Fight Club, FightClub, Fight, Boxing, Fighting">
    <meta name="author" content="Semal Shah and Brendan Thomas">

    <title>Fight Club | Home</title>

    <!-- Custom CSS -->
    <link href="/CSS/styles.css" rel="stylesheet">

    <!-- FontAweosme -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    
</head>

<body class="homepage">

    <header>

    </header>
    
    <br>
<div class="middle">
    <p><a href="index.php">Fight Club</a></p>
</div>

<div class="name">
    <h1 class="title">Equipment</h1>
</div>

<div class="grid">
    <div class="i-items i-items1">
        <img src="/Pictures/Hangin Bag.jpg" class="img1" align="middle">
        <p>
    <?php
        $sql1 = "select id, name, type, description, price from Items WHERE id=4";
        $result = $conn-> query($sql1);
        
        if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
      echo $row["description"];
      echo "<br><br> $", $row["price"];
    }
  } ?></p>
    <a href="/Order/form.php"><button>Order Now</button></a>
    </div>
    <div class="i-items i-items2">
        <img src="/Pictures/Standing Bag.jpg" class="img2">
        <p>
            <?php
        $sql1 = "select id, name, type, description, price from Items WHERE id=5";
        $result = $conn-> query($sql1);
        
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
             echo $row["description"];
             echo "<br><br> $", $row["price"];
            }  
          } ?>
        </p>
        <a href="/Order/form.php"><button>Order Now</button></a>
    </div>
    <div class="i-items i-items1">
        <img src="/Pictures/Boxing Gloves 2.jpg" class="img3">
        <p>
            <?php
        $sql1 = "select id, name, type, description, price from Items WHERE id=6";
        $result = $conn-> query($sql1);
        
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
             echo $row["description"];
             echo "<br> $", $row["price"];
            }  
          } ?>
        </p>
        <a href="/Order/form.php"><button>Order Now</button></a>
    </div>
</div>

    <footer>
        
        <div class="footer-main-div">
            
            <div class="footer-social-icons">
                <ul>
                    <li><a href="#" target="blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" target="blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="blank"><i class="fab fa-google-plus"></i></a></li>
                    <li><a href="#" target="blank"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            
            <div class="footer-menu-1">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="mens.php">Men's</a></li>
                    <li><a href="women.php">Women's</a></li>
                    <li><a href="equipment.php">Equipment</a></li>
                    <li><a href="about.php">About Us</a></li>
                </ul>
            </div>
            
            <div class="footer-menu-2">
                <ul>
                    <li><a href="/Employee/employee.php">Employee</a></li>
                </ul>
            </div>
            
        </div>
        
    </footer>

</body>
    
</html>