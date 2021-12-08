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
            </div>
        </header>

        <main>
            <div id="flexContainer">
                <div id="loginContainer">
                    <form id="login" method="post" action="login.php">
                        <label class="loginTitle">Log in</label><br><br>

                        <label for="username">Enter username</label><br>
                        <input type="text" id="username" name="username" placeholder="Username" required><br><br>

                        <label for="password">Enter password</label><br>
                        <input type="password" id="password" name="password" placeholder="Password" required><br><br>

                        <?php
                            session_start();

                            if (isset($_SESSION["failedLogin"])== true) {
                                echo "<label class='failedLogin'>* Your username is incorrect.</label><br>";
                            }

                            session_destroy();
                        ?>

                        <input type="submit" id="submit" name="submit" value="Log in">
                    </form>
                </div>
            </div>
        </main>

    </body>
</html>

<!-- Alex Oversteegen AEITO21SD-B -->
<!-- All rights reserved, Project M 2020 -->