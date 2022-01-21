<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //somethign was posted
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        } else {
            echo "Please enter valid username and password";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Innovation Station</title>

    <!--Bootstrap links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!--Styling links-->
    <link rel="stylesheet" href="static/index.css" type="text/css">
    <link rel="stylesheet" href="static\signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,500;1,200;1,400&display=swap"
        rel="stylesheet">
</head>

<body>
    <style>
        @charset "utf-8";

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            z-index: -9999;
        }

        ::-webkit-scrollbar-thumb {
            background: rgb(255, 255, 255);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgb(224, 224, 224);
        }

        ::-webkit-scrollbar-corner {
            background: rgba(0, 0, 0, 0.5);
        }

        * {
            margin: 0;
            padding: 0;
            top: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            transition: all 500ms ease;
            font-family: 'Raleway', sans-serif;
            text-decoration: none;
        }

        body {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            overflow-x: hidden;
        }


        section {
            height: 100vh;
        }

        #section1 {
            background-image: url("images\paintBackground.png");
            width: 100%;
            height: 100%;
        }

        .imgCol {
            margin-top: 5%;
            background: radial-gradient(#555759, white);
            height: 100vh;
        }

        .imgSpace {
            background-color: black;
            margin: 2vh 1vh 2vh 1vh;
            height: 96vh;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .textCol {
            margin-top: 5%;
        }

        #introText {
            font-weight: 100;
            text-align: center;
        }

        .text {
            text-align: center;
            font-weight: 400;
            font-size: 3rem;
        }

        .text>span {
            font-weight: 900;
            font-style: italic;
            font-size: 4rem;
        }

        .bg-light {
            background-color: transparent !important;
        }

        .bg-light:hover {
            background-color: #d3d2d2 !important;
    }
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
        }

        #button{

            color: white;
            background-color: transparent;
            border: none;
        }

        #box{
            background-color: #9615DB;
            margin: auto;
            width: 300px;
            padding: 20px;
            border-radius:  1rem;
        }
    </style>


    <nav class="navbar navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Offcanvas navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Innovation Station</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="about.html">What we do</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.html">Innovation Station History and News</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                THE INNOVATION STATION VIRTUAL PORTAL
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="#">What is it</a></li>
                                <li><a class="dropdown-item" href="#">Jump in the Portal</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <section>
    <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 ">
                    </div>
                    <div class="col-12 col-sm-4 textCol">
                    <div id="box">
                        <h1>The Portal Sign Up</h1>
                        <form method="post">
                            <input type="text" name="user_name"><br><br>
                            <input type="password" name="password"><br><br>     

                            <button type="button" class="btn btn-primary"><input id="button" type="submit" value="Signup"></button>
                            <a href="login.php">Login</a>
                        </form>
                    </div>
                    </div>
                    <div class="col-12 col-sm-4 ">
                    </div>
                </div>
            </div>
        
    </section>
</body>

</html>