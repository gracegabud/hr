<!--
#ffd700 - yellow
#fcc305 - yellow2
#800000 - maroon
#670001 - maroon2
-->
<?php
include 'hrd_db.php';

 $count = $con->query("SELECT COUNT(*) FROM employee");
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <title>Dashboard | HRDasboard</title>
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <!-- Optional theme -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/Chart.js"></script>
    <script src="js/jquery.min.js"></script>

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
    position:fixed;
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
                            <a href="dashboard.php" class="active">Dashboard <span class="glyphicon glyphicon-dashboard pull-right" data-toggle="tooltip" title="Dashboard"></span></a>
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
                            <a href="reminders.php">Reminders <span class="glyphicon glyphicon-calendar pull-right" data-toggle="tooltip" title="Reminders"></span></a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalConfirmDelete">Logout <span class="glyphicon glyphicon-off pull-right" data-toggle="tooltip" title="Logout"></span></a>
                        </li>

                    </div>
                    
                </ul>
          </div>   


            <div class="content">
                <div class="col-md-12">
                    <div class="panel panel-default" style="width: 500px;">
                        <div class="panel-heading">Leaves</div>
                        <div class="panel-body">



<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Are you sure you want to log out?</p>
                </div>
                    <a href="logout.php" class="btn  btn-outline-secondary-modal">Yes</a>
                    <a type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">No</a>
            </div>
            <!--/.Content-->
        </div>
    </div>


                        
                            
<canvas id="barChart"></canvas>

              <script type="text/javascript"></script>
                        </div>
                    </div>
                </div>
            </div>
<!-- 
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js" >  </script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" >  </script> -->
            
<div class="col-md-6">
<script type="text/javascript">

$(document).ready(function(){
      // Any of the following formats may be used
//bar
var ctxB = document.getElementById("barChart").getContext('2d');
var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
        // labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
         labels: ["Leave", " Leave", " Leave", " Leave", "Leave", "Leave"],
        datasets: [{
            label: 'Leave Status',
            data: [5, 19, 3, 5, 14, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    optionss: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
            
    $(".push_menu").click(function(){
         $(".wrapper").toggleClass("active");
    });
});
</script>


</div>
</div>
</div>
</div>


<div class="content">
                <div class="col-md-6">
                    <div class="panel panel-default" style="width: 500px;">
                        <div class="panel-heading">Infractions</div>
                        <div class="panel-body">
                            
<canvas id="pieChart"></canvas>


              <script type="text/javascript"></script>
                        </div>
                    </div>
                </div>
            </div>
<!-- 
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js" >  </script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" >  </script> -->
            
<div class="col-md-6">
<script type="text/javascript">

$(document).ready(function(){
      // Any of the following formats may be used
//pie
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [
            {
                data: [300, 50, 100, 40, 120],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }
        ]
    },
    options: {
        responsive: true
    }    
});
            
            
    $(".push_menu").click(function(){
         $(".wrapper").toggleClass("active");
    });
});
</script>


</div>

</div>
</div>
</div>




<div class="content">
                <div class="col-md-6">
                    <div class="panel panel-default" style="width: 500px; margin-left: 100px; margin-top: -660px;">
                        <div class="panel-heading">Leaves</div>
                        <div class="panel-body">
                            
<canvas id="lineChart"></canvas>


              <script type="text/javascript"></script>
                        </div>
                    </div>
                </div>
            </div>
<!-- 
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js" >  </script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" >  </script> -->
            
<div class="col-md-6">
<script type="text/javascript">

$(document).ready(function(){
      // Any of the following formats may be used
//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86, 27, 90]
            }
        ]
    },
    options: {
        responsive: true
    }    
});
            
            
            
    $(".push_menu").click(function(){
         $(".wrapper").toggleClass("active");
    });
});
</script>


</div>

</div>
</div>
</div>


<div class="content">
                <div class="col-md-6">
                    <div class="panel panel-default" style="width: 500px; margin-left: 100px; margin-top: -330px;">
                        <div class="panel-heading">Leaves</div>
                        <div class="panel-body">
                            
<canvas id="polarChart"></canvas>

              <script type="text/javascript"></script>
                        </div>
                    </div>
                </div>
            </div>
<!-- 
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js" >  </script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" >  </script> -->
            
<div class="col-md-6">
<script type="text/javascript">

$(document).ready(function(){
      // Any of the following formats may be used
//polar
var ctxPA = document.getElementById("polarChart").getContext('2d');
var myPolarChart = new Chart(ctxPA, {
    type: 'polarArea',
    data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [
            {
                data: [300, 50, 100, 40, 120],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }
        ]
    },
    options: {
        responsive: true
    }    
});
            
            
            
            
    $(".push_menu").click(function(){
         $(".wrapper").toggleClass("active");
    });
});
</script>


</div>

</div>
</div>
</div>







</body>
</html> 