<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="styles/style.css">

        <title>Project M</title>
    </head>
    <body>
        <header>
            <div class="headerContainer">
                <div class="headerLogo"><p>Project M</p></div>
                <div class="topnav" id="myTopnav">
                    <a href="logout.php">Log out</a>
                    <a class="active" href="forums.php">Forums</a>
                    <a href="#">Document hub</a>
                    <a href="#">Information</a>
                    <a href="main.php">Home</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
        </header>

        <main>
            
        </main>
        <?php
        session_start();

        if (!isset($_SESSION["username"])) {
            header("Location: index.php");
            exit();
        }
        ?>

        <script>
            /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
            
        </script>
    </body>
</html>