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
    <link href="/CSS/styles.css?v=1" rel="stylesheet">

    <!-- FontAweosme -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
</head>

<body>
    <h1>Semal Shah < Brendan Thomas</h1>
    
    <?php
        $password = password_hash(Brendan, PASSWORD_DEFAULT);
        echo $password;
    ?>
</body>
    
</html>