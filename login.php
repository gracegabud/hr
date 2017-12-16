<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style type="text/css">
body{
    margin:0;
    padding: 0;
    min-height: 100%;
    min-width:100%;/*
    background-image: url(images/hrd2) ;*/
    background-color: #560c1b;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-repeat:no-repeat;

}
#bg{
    position:fixed;
    top:0;
    left:0;
    min-height: 100%;
    min-width: 100%;
}

h3{
    font-family: "Maiandra GD", Georgia, Serif;
}

.jumbotron{
    height:280px;
    /*background-color: #ECEFF1;*/
    background-color: #f9f9ef;
}
.vertical-center{
    min-width: 100%;
    min-height: 100%;
    display: flex;
    align-items: center;
}
.form-group{
    margin-left: -30px;
}

#signup-modal{
    margin-left: -27px;
    margin-top: 50px;
}

#fg{
    margin-left: 12px;
    width: 270px;
}
</style>
</head>
  <!--https://scotch.io/tutorials/simple-and-easy-laravel-login-authentication

  To Use

Download the code
Install Laravel: composer install
Change database settings in app/config/database.php
Run the migration: php artisan migrate
Seed the database: php artisan db:seed
View your application at: http://example.com/login
Login to your heart's content!

https://www.youtube.com/watch?v=9Nt8urdHDrs-->


<!--#00BF9A  #008975   #80CBC4  #D1C4E9 #81D4FA #80DEEA style="background-color: #81D4FA;"    -->
<body class="bd image-responsive"><!-- 
<div id="bg image-responsive">
<img src="images/hrd2.png" id="bg" alt=""></div> -->

<form id="frm" method="POST" action="method.php" >

<!--<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p> -->

    <div class="container" style="margin-left: 330px; margin-top: 30px;">
        <div class="col-sm-10" style="width: 330px; margin-left: 160px; margin-top: 150px">
        <div class="jumbotron">

            <div class="form-group" style="margin-top: -40px;"></div>
            <h3 class="admin" style="margin-left: -15px">ADMINISTRATOR</h3>

        <!-- </div> -->
       <!-- <hr class="my-4"> -->
        <h5  style="margin-left: 5px;">Please log in to get access.</h5>
        <form class="form-horizontal" style="margin-left: 10px; margin-right: -20px; margin-top: 20px;">

            <div class="form-group input-group">
             <span class="input-group-addon">
                <span class="glyphicon glyphicon-user"></span>
             </span>
                <input type="username" name="username" class="form-control" placeholder="Username" required="" style="width: 200px;">
            </div>

            <div class="form-group input-group">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
            </span>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" style="width: 200px;"> 
            </div>

            <div class="form-group" >
                <button class="btn btn-primary" style="width: 240px; background-color: #008975;">Log in</button>
            </div>

            <!-- <div class="form-group" >
                <button class="btn btn-outline-warning waves-effect" style="width: 240px; background-color: #670001;">Log in</button>
            </div> -->

            <!-- Trigger the modal -->
             <div class="form-group">
            <h5>Don't have an account? <a href="#" data-toggle="modal" data-target="#signup-modal"> Sign up </a></h5>

            </div>
            </div>
            </div>
            </div>
            </form>

            </div>
            </div>
            </div>
        </form>

        <form id="frm" onsubmit="return validateForm()" method="POST" action="insert_signup.php" >
        <!-- Modal -->
        <div class="modal fade" id="signup-modal" role="dialog">
        <div class="modal-dialog modal-sm">

        <!-- Modal content -->
        <div class="modal-content">
        <div class="modal-header">

        <h3 class="modal-title">Create an account</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
        <!-- <form class="form-horizontal" style="margin-left: 10px;"> -->
        </div>

       <!--  <div class="form-group input-group" id="fg">
            <span class="input-group-addon" for="inputsm">
                <span class="glyphicon glyphicon-lock"></span>
            </span>
                <input type="text" name="IDNo" class="form-control input-sm" id="inputsm"  placeholder="ID No" > 
        </div> -->

        <div class="form-group input-group" id="fg">
            <span class="input-group-addon" for="inputsm">
                <span class="glyphicon glyphicon-user"></span>
            </span>
                <input type="text" name="FirstName" class="form-control input-sm" id="inputsm"  placeholder="First Name"> 
        </div>

        <div class="form-group input-group" for="inputsm" id="fg">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-user"></span>
            </span>
                <input type="text" name="LastName" class="form-control input-sm" id="inputsm"  placeholder="Last Name"> 
        </div>

        <div class="form-group input-group" for="inputsm" id="fg">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-envelope"></span>
            </span>
                <input type="text" name="Email" class="form-control input-sm" id="inputsm"  placeholder="Email"> 
        </div>

        <div class="form-group input-group" for="inputsm" id="fg">
             <span class="input-group-addon">
                <span class="glyphicon glyphicon-user"></span>
             </span>
                <input type="text" name="Username" class="form-control input-sm" id="inputsm"  placeholder="Username">
        </div>

        <div class="form-group input-group" for="inputsm" id="fg">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
            </span>
                <input type="password" name="Password" class="form-control input-sm" id="inputsm"  placeholder="Password"> 
        </div>

        <div class="form-group input-group" for="inputsm" id="fg">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
            </span>
                <input type="password" name="ConfirmPassword" class="form-control input-sm" id="inputsm"  placeholder="Confirm Password"> 
        </div>

            <div class="form-group" id="fg">
                 <button class="btn btn-primary btn-hover btn-info" style="width: 270px; background-color: #008975;">Sign up</button>
            </div>

            <div class="form-group" id="fg">
                <p>Have an account? <a href="login.php" id="trigger" > Log in</a></p>
            </div>
            </div> 
        </form>
        

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://dl.dropboxusercontent.com/u/40665984/decks/js/bootstrap.js"></script>
</body>
</html>
