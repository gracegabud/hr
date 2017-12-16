<!--
#ffd700 - yellow
#fcc305 - yellow2
#800000 - maroon
#670001 - maroon2
-->
<?php 
include 'header.php';
?>
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
                            <a href="infractions.php" class="active">Infractions <span class="glyphicon glyphicon-list-alt pull-right" data-toggle="tooltip" title="Infractions"></span></a>
                        </li>
                        <li>
                            <a href="leaves.php">Leaves <span class="glyphicon glyphicon-calendar pull-right" data-toggle="tooltip" title="Leaves"></span></a>
                        </li>
                        <li>
                            <a href="reminders.php">Reminders <span class="glyphicon glyphicon-calendar pull-right" data-toggle="tooltip" title="Reminders"></span></a>
                        </li>
                        <li>
                            <a href="logout.php">Logout <span class="glyphicon glyphicon-off pull-right" data-toggle="tooltip" title="Logout"></span></a>
                        </li>

                    </div>
                    
                </ul>
          </div>   
            <div class="content">
                <div class="col-md-12">
                    <div class="panel panel-default" style="width: 500px;">
                        <div class="panel-heading">Infractions</div>
                        <div class="panel-body">                          
                          <div class="row"></div>
                          <canvas id="pieChart"></canvas>

              <script type="text/javascript"></script>
                        </div>
                    </div>
                </div>
            </div>

            
<div class="col-md-12">
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
            

});
</script>




                        </div>
                    </div>
            <script type="text/javascript">
    $(document).ready(function(){
    $(".push_menu").click(function(){
         $(".wrapper").toggleClass("active");
    });
});
</script>

</body>
</html> 