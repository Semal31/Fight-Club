<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Employee Page For FightClub">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
        
        <!-- CSS -->
        <style>
            body {
		        background-image: url(/Pictures/FrontPage.jpg); 
	        }
	        
            .loginbox {
                margin-left: 20%;
                margin-right: 20%;
                background-color: #333;
                margin-top: 0%;
                padding: 10%;
                background-color: #ededed;
            }
            
            .login {
                text-align: center;
                margin-top: 2%;
            }
            
            .loginuser {
                padding: 5px;
                margin-bottom: 10px;
                font-size: 20px;
                text-decoration: none;
                background-color: #ededed;
                border: none;
                border-bottom: 2px solid #000;
                font-family: 'Staatliches', cursive;
                width: 50%;
                font-size: 30px;
            }

            .loginpwd {
                padding: 5px;
                margin-bottom: 10px;
                font-size: 20px;
                text-decoration: none;
                background-color: #ededed;
                border: none;
                border-bottom: 2px solid #000;
                font-family: 'Staatliches', cursive;
                width: 50%;
                font-size: 30px;
            }
            
            .loginuser:focus {
                outline: none;
            }
            
            .loginpwd:focus {
                outline: none;
            }
            
            .blogin {
         		text-decoration: none;
    	    	font-size: 30px;
    		    border-radius: 50px;
	        	background-color: #ededed;
    		    color: #828282;
	        	border: none;
	        	padding: 15px;
            }
            
            .blogin:hover {
                background-color: #828282;
	        	color: #ededed;
	        	transition: 0.5s;
            }
            
            .blogout {
                float: right;
                font-size: 20px;
                border: none;
                color: #000;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 30px;
            }
            
            .blogout:hover {
                border: 1px solid #333;
                transition: 0.5s;
            }
            
            .ehead {
                font-size: 30px;
                float: left;
                font-family: 'Permanent Marker', cursive;
                margin-top: 0%;
                text-align: center;
            }
            
            .ehead a {
                text-decoration: none;
                color: #ededed;
            }
            
            .ehead a:hover {
                color: #a1a1a1;
                transition: 0.5s;
            }
        
        </style>
        
    </head>
    <body>
        <h1 class="ehead"><a href="/index.php">Fight Club</a></h1>
        
        <div class="login">
            <?php
                if (isset($_SESSION['userid'])) {
                   echo '<form action="includese/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit" class="blogout">Logout</button>
                    </form>';
                } else {
                    echo '<div class="loginbox"><form action="includese/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username or E-mail" class="loginuser">
                        </br>
                        </br>
                        <input type="password" name="pwd" placeholder="Password" class="loginpwd">
                        </br>
                        </br>
                        <button type="submit" name="login-submit" class="blogin">Login</button>
                        </form></div>';
                }
            ?>
        </div>
        