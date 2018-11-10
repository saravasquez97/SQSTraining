<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Connor">

        <!-- Required meta tags -->
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
        <link href="assets/css/main.css" rel="stylesheet">

        <title>SQS Training Site</title>

        <style>
            body {
                padding-top: 5rem;
            }
        </style>

    </head>
    <body>
        <div id="heading2">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

                <a class="navbar-brand" href="#"><img src="assets/img/logo.png" class="figure-img img-fluid rounded" width="45" height="45" alt="The SQS company logo."></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.sqs.com/en/index.php" target="_blank">Corporate Site</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div>
            <div class="welcome">
                <h1 id="WelcomeHead">Welcome to the SQS Training Website!</h1>
                <p id="DirectionPara">This website is for testing automated script to find different errors throughout the site. Sign in or sign up to begin!</p><br><br>
                <button class="btn" id="LoginBut" onclick="location.href='src/modules/sign_in/sign_in_controller.php'">Sign In</button>
                <button class="btn" id="RegisterBut" onclick="location.href='src/modules/sign_up/sign_up_controller.php'">Sign Up</button>
            </div>
        </div>
    </body>
</html>
