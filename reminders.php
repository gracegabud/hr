<!DOCTYPE html>
<html>
<head>

<!--
#ffd700 - yellow
#fcc305 - yellow2
#800000 - maroon
#670001 - maroon2
-->
<meta charset="utf-8">
    <title>Reminders | HRDasboard</title>
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
 
<style>

  @import url(http://fonts.googleapis.com/css?family=Lato);

a:hover, a:focus{
 background-color: #D9853B;
}

.container
{
    width:800px;
    overflow:hidden;
    display:inline-block;
}
.side-bar
{
    /*background:#74AFAD;*/
    background: #800000;
    position:absolute;
    height:100%;
    width:200px;
    color:#fff;
    transition: margin-left 0.5s;
}

.side-bar ul
{
    list-style:none;
    padding:0px;
    
}

.side-bar ul li.menu-head
{
    font-family: 'Lato', sans-serif;
    padding:20px;
}

.side-bar ul li.menu-head a
{
    color:#fff;
    text-decoration:none;
    height:50px;
}


.side-bar ul .menu-head  a
{
    color:#fff;
    text-decoration:none;
    height:50px;
}

.side-bar ul .menu li  a 
{
    color:#fff;
    text-decoration:none;
    display:inline-table;
    width:100%;
    padding-left:20px;
    padding-right:20px;
    padding-top:10px;
    padding-bottom:10px;
}

.side-bar ul .menu li  a:hover
{
    border-left:3px solid #ECECEA;    
    padding-left:17px;
}

.side-bar ul .menu li  a.active
{
    padding-left:17px;
   /* background:#D9853B;*/
   background: #ffd700;
    border-left:3px solid #ECECEA;
}

.side-bar ul .menu li  a.active:before {
   content:"";
   position: absolute;
   width: 0;
   height: 0;
   border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
  
  border-left: 7px solid #ffd700;
    margin-top: -10px;
    margin-left: 180px;
}


.content
{
    padding-left: 200px;
    transition: padding-left 0.5s;
}

.active > .side-bar
{
    margin-left:-150px;   
    transition: margin-left 0.5s;
}

.active > .content
{
    padding-left:50px;
    transition: padding-left 0.5s;

}
<script>

   </style>
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="wrapper">
          <div class="side-bar">
                <ul>
                    <li class="menu-head">
                        HR Dashboard <a href="#" class="push_menu"><span class="glyphicon glyphicon-align-justify pull-right"></span></a>
                    </li><br>

                    <div class="menu">
                    <!--  <p style="font-family: Verdana,Arial; font-size: 18px; text-align: center;"> <?php  session_start(); echo $_SESSION['fname'],' ', $_SESSION['lname'];?></p>
                      
                        <hr class="style1">  -->
                        <li>

                            <a href="home.php">Home <span class="glyphicon glyphicon-home pull-right" data-toggle="tooltip" title="Home"></span></a>
                        </li>
                        <li>
                            <a href="dashboard.php">Dashboard <span class="glyphicon glyphicon-dashboard pull-right" data-toggle="tooltip" title="Dashboard"></span></a>
                        </li>
                        <li>
                            <a href="employees.php">Employees <span class="glyphicon glyphicon-user pull-right" data-toggle="tooltip" title="Employees"></span></a>
                        </li>
                        <li>
                            <a href="infractions.php">Infractions <span class="glyphicon glyphicon-list-alt pull-right" data-toggle="tooltip" title="Infractions"></span></a>
                        </li>
                        <li>
                            <a href="leaves.php">Leaves <span class="glyphicon glyphicon-calendar pull-right" data-toggle="tooltip" title="Leaves"></span></a>
                        </li>
                        <li>
                            <a href="reminders.php"  class="active">Reminders <span class="glyphicon glyphicon-calendar pull-right" data-toggle="tooltip" title="Reminders"></span></a>
                        </li>
                        <li>
                            <a href="logout.php">Logout <span class="glyphicon glyphicon-off pull-right" data-toggle="tooltip" title="Logout"></span></a>
                        </li>

                    </div>
                    
                </ul>
          </div>   
            <div class="content">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Reminders</div>
                        <div class="panel-body">
                            REMINDERS
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
    $(document).ready(function(){
    $(".push_menu").click(function(){
         $(".wrapper").toggleClass("active");
    });
});
</script>

    </div>
  </div>
</div>

</body>
</html> 